<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Home Controller
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // Permitir acceso sin autenticación para 'create' e 'index'
        $this->Authentication->allowUnauthenticated(['create', 'index', 'login']);
    }

    /**
     * Index method: Página principal con opciones de login o crear usuario.
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // Verificar si el usuario está logueado
        if ($this->Identity->isLoggedIn()) {
            return $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
        }

        // Mostrar opciones para crear usuario o iniciar sesión
        $this->set('isLoggedIn', false);
    }

    /**
     * Crear un nuevo usuario
     *
     * @return \Cake\Http\Response|null|void Redirige al login si se crea el usuario correctamente
     */
    public function create()
{
    // Creamos una nueva entidad de usuario vacía
    $user = $this->Users->newEmptyEntity();

    // Verificamos si la solicitud es un POST (lo que indica que el formulario fue enviado)
    if ($this->request->is('post')) {
        // Cargamos los datos del formulario en la entidad
        $user = $this->Users->patchEntity($user, $this->request->getData());

        // Verificamos si hay errores de validación al intentar guardar el usuario
        if ($this->Users->save($user)) {
            // Si se guarda correctamente, mostramos un mensaje de éxito
            $this->Flash->success(__('Usuario creado con éxito.'));
            // Redirigimos al índice o a la home para continuar con otras acciones
            return $this->redirect(['action' => 'index']);
        } else {
            // Si hay errores de validación, mostramos un mensaje de error
            $this->Flash->error(__('No se pudo crear el usuario. Por favor, corrige los errores.'));
        }
    }

    // Pasamos la entidad a la vista para poder usarla en el formulario
    $this->set(compact('user'));
}

    /**
     * Login: iniciar sesión con DNI y contraseña
     *
     * @return \Cake\Http\Response|null|void Redirige al Dashboard si la autenticación es exitosa
     */
    public function login()
    {
        // Si ya está logueado, redirigir al Dashboard
        if ($this->Identity->isLoggedIn()) {
            return $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
        }

        if ($this->request->is('post')) {
            // Buscar al usuario por DNI
            $user = $this->Users->findByDni($this->request->getData('dni'))->first();

            if ($user && password_verify($this->request->getData('password'), $user->password)) {
                // Si la contraseña es correcta, iniciar sesión
                $this->Identity->set($user);
                return $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
            }

            $this->Flash->error(__('DNI o contraseña incorrectos.'));
        }
    }

    /**
     * Logout: Cerrar sesión
     *
     * @return \Cake\Http\Response|null|void Redirige al inicio después del logout
     */
    public function logout()
    {
        $this->Identity->set(null);  // Limpiar la sesión
        return $this->redirect(['action' => 'index']);
    }
}
