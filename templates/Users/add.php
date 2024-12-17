<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $departments
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 * @var \Cake\Collection\CollectionInterface|string[] $contracts
 * @var \Cake\Collection\CollectionInterface|string[] $workplaces
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('dni');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('fecha_nacimiento');
                    echo $this->Form->control('profesion');
                    echo $this->Form->control('puesto');
                    echo $this->Form->control('email');
                    echo $this->Form->control('nacionalidad');
                    echo $this->Form->control('foto');
                    echo $this->Form->control('discapacidad');
                    echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
                    echo $this->Form->control('categoria_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('contrato_id', ['options' => $contracts, 'empty' => true]);
                    echo $this->Form->control('workplace_id', ['options' => $workplaces, 'empty' => true]);
                    echo $this->Form->control('experiencia_gesplan');
                    echo $this->Form->control('experiencia_total');
                    echo $this->Form->control('disponibilidad_traslado');
                    echo $this->Form->control('formulario_aceptado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
