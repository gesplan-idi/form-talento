<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExperienceType $experienceType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $experienceType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $experienceType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Experience Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="experienceTypes form content">
            <?= $this->Form->create($experienceType) ?>
            <fieldset>
                <legend><?= __('Edit Experience Type') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
