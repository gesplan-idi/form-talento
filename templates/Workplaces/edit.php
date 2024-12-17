<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Workplace $workplace
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $workplace->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $workplace->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Workplaces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="workplaces form content">
            <?= $this->Form->create($workplace) ?>
            <fieldset>
                <legend><?= __('Edit Workplace') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
