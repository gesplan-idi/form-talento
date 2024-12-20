<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Island $island
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $island->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $island->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Islands'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="islands form content">
            <?= $this->Form->create($island) ?>
            <fieldset>
                <legend><?= __('Edit Island') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
