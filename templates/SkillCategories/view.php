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
            <?= $this->Html->link(__('Edit Skill Category'), ['action' => 'edit', $skillCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Skill Category'), ['action' => 'delete', $skillCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skillCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Skill Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Skill Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skillCategories view content">
            <h3><?= h($skillCategory->categoria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= h($skillCategory->categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subcategoria') ?></th>
                    <td><?= h($skillCategory->subcategoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($skillCategory->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Skills') ?></h4>
                <?php if (!empty($skillCategory->skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Skill Category Id') ?></th>
                            <th><?= __('Otros') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skillCategory->skills as $skills) : ?>
                        <tr>
                            <td><?= h($skills->id) ?></td>
                            <td><?= h($skills->user_id) ?></td>
                            <td><?= h($skills->skill_category_id) ?></td>
                            <td><?= h($skills->otros) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Skills', 'action' => 'view', $skills->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Skills', 'action' => 'edit', $skills->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skills', 'action' => 'delete', $skills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skills->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
