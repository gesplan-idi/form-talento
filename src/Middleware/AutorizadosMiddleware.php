<?php

declare(strict_types=1);

/**
 * Middleware para verificar si el usuario esta registrado de la tabla registrados
 */

namespace App\Middleware;

use Cake\ORM\TableRegistry;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Server\MiddlewareInterface;
use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;

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
        // es un usuario sin permisos por lo que le permitimos solo editar su perfil o ver su perfil
        /* To do
        Hacer un array con metodos y cada capa distinta, que roles puede hacer que en que tablas y en base a eso, hacer los permisos de url por cada tipo de role, el role sera user, editor (Solo edita contenido) o admin (edita todo)
        */
        if (!$registrado) {
            if ($url !== '/' && $url !== '/users/add') {
                $request = $request->withAttribute('email', $email);
                return $handler->handle($request->withUri($request->getUri()->withPath('/users/add')));
            } else if ($url === '/users/add') {
                throw new ForbiddenException('No tienes permisos para acceder a esta pagina');
            }
        } else {
            $request = $request->withAttribute('user_id', $registrado->id);
        }

        if ($url === '/users/delete' && $registrado->role !== 'admin') {
            throw new ForbiddenException('Debes ser administrador para acceder a esta pagina');
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
