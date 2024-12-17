<!-- src/Template/Home/create.php -->

<h1>Crear cuenta</h1>

<?php echo $this->Form->create($user); ?>

    <?= $this->Form->control('dni', ['label' => 'DNI', 'required' => true]) ?>
    <?= $this->Form->control('nombre_apellidos', ['label' => 'Nombre y Apellidos', 'required' => true]) ?>
    <?= $this->Form->control('password', ['label' => 'Contraseña', 'type' => 'password', 'required' => true]) ?>

    <!-- Campo de confirmación de contraseña (opcional) -->
    <?= $this->Form->control('password_confirmation', ['label' => 'Confirmar Contraseña', 'type' => 'password', 'required' => true]) ?>

    <?= $this->Form->button('Crear cuenta') ?>

<?php echo $this->Form->end(); ?>

<!-- Mostrar errores de validación -->
<?php if ($this->Form->isValid() === false): ?>
    <div class="errors">
        <?= $this->Form->error('dni') ?>
        <?= $this->Form->error('password') ?>
        <?= $this->Form->error('nombre_apellidos') ?>
    </div>
<?php endif; ?>
