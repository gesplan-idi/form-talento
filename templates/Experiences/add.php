<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience $experience
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $projects
 * @var \Cake\Collection\CollectionInterface|string[] $experienceTypes
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
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                    echo $this->Form->control('otro_proyecto');
                    echo $this->Form->control('nombre_empresa');
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('periodo_inicio', ['empty' => true]);
                    echo $this->Form->control('periodo_fin', ['empty' => true]);
                    echo $this->Form->control('responsabilidades');
                    echo $this->Form->control('logros');
                    echo $this->Form->control('trabajos');
                    echo $this->Form->control('tipo_id', ['options' => $experienceTypes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
