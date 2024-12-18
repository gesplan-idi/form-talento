<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspiration $aspiration
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $aspiration->id],
                ['confirm' => __('Seguro que quieres eliminar # {0}?', $aspiration->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar aspiraciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aspirations form content">
            <?= $this->Form->create($aspiration) ?>
            <fieldset>
                <legend><?= __('Editar aspiración') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'readonly' => true]);
                    echo $this->Form->control('intereses');
                    echo $this->Form->control('posicion_interes');
                    echo $this->Form->control('proyecto_nacional');
                    echo $this->Form->control('proyecto_internacional');
                    echo $this->Form->control('disponibilidad_retos');
                    echo $this->Form->control('disponibilidad_viajar');
                    echo $this->Form->control('cambio_isla');
                    echo $this->Form->control('isla_destino');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
