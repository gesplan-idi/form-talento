<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspiration $aspiration
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $disponibilities
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aspirations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aspirations form content">
            <?= $this->Form->create($aspiration) ?>
            <fieldset>
                <legend><?= __('Add Aspiration') ?></legend>
                <?php
                    // Si $user_id está definido, usa un campo oculto para pasarlo
                    if (!empty($user_id)) {
                        echo $this->Form->hidden('user_id', ['value' => $user_id]);
                    } else {
                        // Si no hay $user_id, muestra el selector de usuarios como antes
                        echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    }
                    echo $this->Form->control('intereses');
                    echo $this->Form->control('posicion_interes_pregunta');
                    echo $this->Form->control('proyecto_nacional');
                    echo $this->Form->control('proyecto_internacional');
                    echo $this->Form->control('disponibility_id', ['options' => $disponibilities]);
                    echo $this->Form->control('disponibilidad_viajar');
                    echo $this->Form->control('cambio_isla');
                    echo $this->Form->control('island_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
