<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Contract> $contracts
 */
?>
<div class="contracts index content">
    <?= $this->Html->link(__('New Contract'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contracts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contracts as $contract): ?>
                <tr>
                    <td><?= $this->Number->format($contract->id) ?></td>
                    <td><?= h($contract->tipo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $contract->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contract->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?>
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
