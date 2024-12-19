<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profession $profession
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profession->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profession->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Professions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="professions form content">
            <?= $this->Form->create($profession) ?>
            <fieldset>
                <legend><?= __('Edit Profession') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
