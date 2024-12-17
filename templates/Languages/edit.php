<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $languageLevels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $language->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $language->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languages form content">
            <?= $this->Form->create($language) ?>
            <fieldset>
                <legend><?= __('Edit Language') ?></legend>
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
