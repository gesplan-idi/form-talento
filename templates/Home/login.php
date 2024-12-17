<!-- src/Template/Home/login.php -->

<h1>Iniciar sesión</h1>

<?php echo $this->Form->create(null, ['url' => ['action' => 'login']]); ?>
    <?= $this->Form->control('dni', ['label' => 'DNI', 'required' => true]) ?>
    <?= $this->Form->control('password', ['label' => 'Contraseña', 'type' => 'password', 'required' => true]) ?>
    <?= $this->Form->button('Iniciar sesión') ?>
<?php echo $this->Form->end(); ?>

<p><a href="<?= $this->Url->build(['action' => 'create']) ?>">Crear cuenta</a></p>
