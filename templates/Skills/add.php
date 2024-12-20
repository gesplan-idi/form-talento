<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill $skill
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $skillCategories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skills form content">
            <?= $this->Form->create($skill) ?>
            <fieldset>
                <legend><?= __('Add Skill') ?></legend>
                <?php
                    // Si $user_id está definido, usa un campo oculto para pasarlo
                    if (!empty($user_id)) {
                        echo $this->Form->hidden('user_id', ['value' => $user_id]);
                    } else {
                        // Si no hay $user_id, muestra el selector de usuarios como antes
                        echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    }
                    echo $this->Form->control('skill_category_id', ['options' => $skillCategories, 'empty' => true]);
                    echo $this->Form->control('otros');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
