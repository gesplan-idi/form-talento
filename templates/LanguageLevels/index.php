<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\LanguageLevel> $languageLevels
 */
?>
<div class="languageLevels index content">
    <?= $this->Html->link(__('New Language Level'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Language Levels') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nivel') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($languageLevels as $languageLevel): ?>
                <tr>
                    <td><?= $this->Number->format($languageLevel->id) ?></td>
                    <td><?= h($languageLevel->nivel) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $languageLevel->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $languageLevel->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $languageLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageLevel->id)]) ?>
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
