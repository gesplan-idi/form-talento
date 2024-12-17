<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SkillCategory> $skillCategories
 */
?>
<div class="skillCategories index content">
    <?= $this->Html->link(__('New Skill Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Skill Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('categoria') ?></th>
                    <th><?= $this->Paginator->sort('subcategoria') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($skillCategories as $skillCategory): ?>
                <tr>
                    <td><?= $this->Number->format($skillCategory->id) ?></td>
                    <td><?= h($skillCategory->categoria) ?></td>
                    <td><?= h($skillCategory->subcategoria) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $skillCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $skillCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skillCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skillCategory->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
