<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Education $education
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $educationLevels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $education->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $education->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Educations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="educations form content">
            <?= $this->Form->create($education) ?>
            <fieldset>
                <legend><?= __('Edit Education') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'disabled' => true]);
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
