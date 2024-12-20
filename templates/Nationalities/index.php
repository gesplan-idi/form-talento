<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nationality> $nationalities
 */
?>
<div class="nationalities index content">
    <?= $this->Html->link(__('New Nationality'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nationalities') ?></h3>
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
                <?php foreach ($nationalities as $nationality): ?>
                <tr>
                    <td><?= $this->Number->format($nationality->id) ?></td>
                    <td><?= h($nationality->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $nationality->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nationality->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nationality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nationality->id)]) ?>
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
