<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Language> $languages
 */
?>
<div class="languages index content">
    <?= $this->Html->link(__('New Language'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Languages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('option_id') ?></th>
                    <th><?= $this->Paginator->sort('certificado') ?></th>
                    <th><?= $this->Paginator->sort('institucion') ?></th>
                    <th><?= $this->Paginator->sort('nivel_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($languages as $language): ?>
                <tr>
                    <td><?= $this->Number->format($language->id) ?></td>
                    <td><?= $language->has('user') ? $this->Html->link($language->user->dni, ['controller' => 'Users', 'action' => 'view', $language->user->id]) : '' ?></td>
                    <td><?= $language->has('language_option') ? $this->Html->link($language->language_option->nombre, ['controller' => 'LanguageOptions', 'action' => 'view', $language->language_option->id]) : '' ?></td>
                    <td><?= h($language->certificado) ?></td>
                    <td><?= h($language->institucion) ?></td>
                    <td><?= $language->has('language_level') ? $this->Html->link($language->language_level->nivel, ['controller' => 'LanguageLevels', 'action' => 'view', $language->language_level->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $language->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $language->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?>
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
