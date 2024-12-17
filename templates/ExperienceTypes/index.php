<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ExperienceType> $experienceTypes
 */
?>
<div class="experienceTypes index content">
    <?= $this->Html->link(__('New Experience Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Experience Types') ?></h3>
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
                <?php foreach ($experienceTypes as $experienceType): ?>
                <tr>
                    <td><?= $this->Number->format($experienceType->id) ?></td>
                    <td><?= h($experienceType->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $experienceType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experienceType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experienceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experienceType->id)]) ?>
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
