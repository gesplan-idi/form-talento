<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SkillCategory $skillCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Skill Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skillCategories form content">
            <?= $this->Form->create($skillCategory) ?>
            <fieldset>
                <legend><?= __('Add Skill Category') ?></legend>
                <?php
                    echo $this->Form->control('categoria');
                    echo $this->Form->control('subcategoria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>