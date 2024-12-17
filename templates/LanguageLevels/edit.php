<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LanguageLevel $languageLevel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $languageLevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $languageLevel->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Language Levels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languageLevels form content">
            <?= $this->Form->create($languageLevel) ?>
            <fieldset>
                <legend><?= __('Edit Language Level') ?></legend>
                <?php
                    echo $this->Form->control('nivel');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
