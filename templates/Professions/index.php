<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Profession> $professions
 */
?>
<div class="professions index content">
    <?= $this->Html->link(__('New Profession'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Professions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professions as $profession): ?>
                <tr>
                    <td><?= $this->Number->format($profession->id) ?></td>
                    <td><?= h($profession->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profession->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profession->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profession->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profession->id)]) ?>
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
