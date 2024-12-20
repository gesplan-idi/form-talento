<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Island> $islands
 */
?>
<div class="islands index content">
    <?= $this->Html->link(__('New Island'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Islands') ?></h3>
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
                <?php foreach ($islands as $island): ?>
                <tr>
                    <td><?= $this->Number->format($island->id) ?></td>
                    <td><?= h($island->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $island->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $island->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $island->id], ['confirm' => __('Are you sure you want to delete # {0}?', $island->id)]) ?>
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
