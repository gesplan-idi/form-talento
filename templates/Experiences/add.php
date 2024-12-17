<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience $experience
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Experiences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="experiences form content">
            <?= $this->Form->create($experience) ?>
            <fieldset>
                <legend><?= __('Add Experience') ?></legend>
                <?php
                    // Si $user_id está definido, usa un campo oculto para pasarlo
                    if (!empty($user_id)) {
                        echo $this->Form->hidden('user_id', ['value' => $user_id]);
                    } else {
                        // Si no hay $user_id, muestra el selector de usuarios como antes
                        echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    }
                    echo $this->Form->control('nombre_empresa');
                    echo $this->Form->control('nombre_proyecto');
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('periodo_inicio', ['empty' => true]);
                    echo $this->Form->control('periodo_fin', ['empty' => true]);
                    echo $this->Form->control('responsabilidades');
                    echo $this->Form->control('logros');
                    echo $this->Form->control('trabajos');
                    echo $this->Form->control('tipo_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
