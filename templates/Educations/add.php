<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Education $education
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $educationLevels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Educations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="educations form content">
            <?= $this->Form->create($education) ?>
            <fieldset>
                <legend><?= __('Add Education') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('nombre_titulacion');
                    echo $this->Form->control('ano_finalizacion');
                    echo $this->Form->control('institucion');
                    echo $this->Form->control('nivel_id', ['options' => $educationLevels, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
