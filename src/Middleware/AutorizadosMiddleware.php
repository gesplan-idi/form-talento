<?php

declare(strict_types=1);

/**
 * Middleware para verificar si el usuario esta autorizado de la tabla autorizados
 */

namespace App\Middleware;

use Cake\ORM\TableRegistry;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Server\MiddlewareInterface;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;

class AutorizadosMiddleware implements MiddlewareInterface
{
    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface {
        $user = getADuser()['user'];
        $domain = getADuser()['domain'];
        $email = $user . '@' . strtolower($domain) . '.es';
        $url = $request->getUri()->getPath(); // Leer la URL de la petición
        $usersTable = TableRegistry::getTableLocator()->get('Users');
        $registrado = $usersTable->find()->where(['email' => $email])->first();
        if ($domain !== Configure::read('ActiveDirectoryServer')) {
            throw new ForbiddenException('No tienes permisos para acceder a esta pagina');
        }
        /* un usuario no registrado irá a la pagina de registro, si es un usuario registrado su home será su perfil de usuario
        * si es un usuario con un rol distinto a user podrá ir a la pagina de inicio
        */
        if (!$registrado) {
            $request = $request->withAttribute('email', $email);
            return $handler->handle($request->withUri($request->getUri()->withPath('/users/add')));
        } elseif ($registrado->role === 'user' && $url === '/') {
            $request = $request->withAttribute('user_id', $registrado->id);
            $request = $request->withAttribute('role', $registrado->role);
            return $handler->handle($request->withUri($request->getUri()->withPath('/users/view/' . $registrado->id)));
        } elseif ($registrado->role === 'user' || ($registrado->role === 'editor' && $url === '/users')) {
            $request = $request->withAttribute('user_id', $registrado->id);
            $request = $request->withAttribute('role', $registrado->role);
        } else {
            $request = $request->withAttribute('role', $registrado->role);
        }

        // Verificar permisos
        $method = $request->getMethod();
        if (!hasPermission($registrado->role, $registrado->id, $url, $method) && $url !== '/') {
            throw new ForbiddenException('No tienes permisos para acceder a esta pagina');
        }

        return $handler->handle($request);
    }
}

/* 
* Funcion para obtener el usuario y el dominio del usuario autenticado en windows en el IIS con active directory
* @return array
*/

function getADuser(): array
{
    $activeDirectory = explode('\\', Configure::read('ActiveDirectory'));
    return [
        'user' => end($activeDirectory),
        'domain' => reset($activeDirectory)
    ];
}

/**
 * Verifica si un rol tiene permiso para acceder a una URL y método específicos.
 *
 * @param string $role El rol del usuario.
 * @param string $url La URL a la que se intenta acceder.
 * @param string $method El método HTTP de la petición.
 * @return bool True si el rol tiene permiso, false en caso contrario.
 */
function hasPermission(string $role, string $id, string $url, string $method): bool
{
    $urlParts = explode('/', trim($url, '/'));
    // comprobamos para evitar que el usuario pueda acceder al usuario distinto al suyo
    if (
        $role !== 'admin' && $urlParts[0] === 'users' && isset($urlParts[1]) &&
        in_array($urlParts[1], ['edit', 'add', 'view'])  && end($urlParts) !== $id
    ) {
        return false;
    }
    $permissions = [
        'admin' => [
            'urls' => ['*'],
            'methods' => ['GET', 'POST', 'PUT', 'DELETE']
        ],
        'editor' => [
            [
                'urls' => ['aspirations', 'categories', 'contracts', 'departments', 'education-levels', 'educations', 'email', 'experiences', 'experience-types', 'language-levels', 'languages', 'projects', 'skill-categories', 'skills', 'users', 'workplaces'],
                'methods' => ['GET', 'POST', 'PUT', 'DELETE']
            ],
            [
                'urls' => ['users'],
                'methods' => ['GET', 'PUT']
            ]
        ],
        'user' => [
            [
                'urls' => ['aspirations', 'educations', 'experiences', 'languages', 'skills',],
                'methods' => ['GET', 'POST', 'PUT', 'DELETE']
            ],
            [
                'urls' => [ 'categories', 'contracts', 'departments', 'education-levels', 'email', 'experience-types', 'language-levels', 'projects', 'skill-categories', 'users', 'workplaces'],
                'methods' => ['GET']
            ],
            [
                'urls' => ['users'],
                'methods' => ['GET', 'PUT']
            ]
        ]
    ];

    if (!isset($permissions[$role])) {
        return false;
    }

    $rolePermissions = $permissions[$role];

    if ($role === 'admin') {
        if ((in_array('*', $rolePermissions['urls']) || in_array($urlParts[0], $rolePermissions['urls'])) && in_array($method, $rolePermissions['methods'])) {
            return true;
        }
    } else {
        foreach ($rolePermissions as $permissionSet) {
            if ((in_array('*', $permissionSet['urls']) || in_array($urlParts[0], $permissionSet['urls'])) && in_array($method, $permissionSet['methods'])) {
                return true;
            }
        }
    }

    return false;
}