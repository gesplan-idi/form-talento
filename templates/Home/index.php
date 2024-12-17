<!-- src/Template/Home/index.php -->

<h1>Bienvenido al portal</h1>

<!-- Si no estamos logueados, mostramos las opciones de login y crear usuario -->
<?php if (!$this->Identity->isLoggedIn()): ?>
    <p><a href="<?= $this->Url->build(['action' => 'login']) ?>">Iniciar sesión</a></p>
    <p><a href="<?= $this->Url->build(['action' => 'create']) ?>">Crear usuario</a></p>
<?php else: ?>
    <p>¡Sesión iniciada! <a href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']) ?>">Ir al menú inicial</a></p>
<?php endif; ?>
