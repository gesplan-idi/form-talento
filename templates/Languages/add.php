<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $languageLevels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languages form content">
            <?= $this->Form->create($language) ?>
            <fieldset>
                <legend><?= __('Add Language') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('idioma');
                    echo $this->Form->control('certificado');
                    echo $this->Form->control('institucion');
                    echo $this->Form->control('nivel_id', ['options' => $languageLevels, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
