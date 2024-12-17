<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EducationLevel $educationLevel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $educationLevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $educationLevel->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Education Levels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="educationLevels form content">
            <?= $this->Form->create($educationLevel) ?>
            <fieldset>
                <legend><?= __('Edit Education Level') ?></legend>
                <?php
                    echo $this->Form->control('nivel');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
