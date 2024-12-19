<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience $experience
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $experienceTypes
 * @var string[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $experience->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Experiences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="experiences form content">
            <?= $this->Form->create($experience) ?>
            <fieldset>
                <legend><?= __('Edit Experience') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('nombre_empresa');
                    echo $this->Form->control('otro_proyecto');
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('periodo_inicio', ['empty' => true]);
                    echo $this->Form->control('periodo_fin', ['empty' => true]);
                    echo $this->Form->control('responsabilidades');
                    echo $this->Form->control('logros');
                    echo $this->Form->control('trabajos');
                    echo $this->Form->control('tipo_id', ['options' => $experienceTypes]);
                    echo $this->Form->control('project_id', ['options' => $projects, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
