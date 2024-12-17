<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill $skill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Skill'), ['action' => 'edit', $skill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Skill'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skills view content">
            <h3><?= h($skill->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $skill->has('user') ? $this->Html->link($skill->user->dni, ['controller' => 'Users', 'action' => 'view', $skill->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Skill Category') ?></th>
                    <td><?= $skill->has('skill_category') ? $this->Html->link($skill->skill_category->categoria, ['controller' => 'SkillCategories', 'action' => 'view', $skill->skill_category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Otros') ?></th>
                    <td><?= h($skill->otros) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($skill->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
