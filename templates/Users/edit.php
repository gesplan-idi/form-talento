<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var string[]|\Cake\Collection\CollectionInterface $departments
 * @var string[]|\Cake\Collection\CollectionInterface $categories
 * @var string[]|\Cake\Collection\CollectionInterface $contracts
 * @var string[]|\Cake\Collection\CollectionInterface $workplaces
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('dni');
                    echo $this->Form->control('nombre_apellidos');
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
