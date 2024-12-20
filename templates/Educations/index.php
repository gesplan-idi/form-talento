<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Education> $educations
 */
?>
<div class="educations index content">
    <?= $this->Html->link(__('New Education'), ['action' => 'add', '?' => ['user_id' => $user_id]], ['class' => 'button float-right']) ?>
    <h3><?= __('Educations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre_titulacion') ?></th>
                    <th><?= $this->Paginator->sort('ano_finalizacion') ?></th>
                    <th><?= $this->Paginator->sort('institucion') ?></th>
                    <th><?= $this->Paginator->sort('nivel_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($educations as $education): ?>
                <tr>
                    <td><?= $this->Number->format($education->id) ?></td>
                    <td><?= $education->has('user') ? $this->Html->link($education->user->dni, ['controller' => 'Users', 'action' => 'view', $education->user->id]) : '' ?></td>
                    <td><?= h($education->nombre_titulacion) ?></td>
                    <td><?= $education->ano_finalizacion === null ? '' : $this->Number->format($education->ano_finalizacion) ?></td>
                    <td><?= h($education->institucion) ?></td>
                    <td><?= $education->has('education_level') ? $this->Html->link($education->education_level->nivel, ['controller' => 'EducationLevels', 'action' => 'view', $education->education_level->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $education->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $education->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $education->id], ['confirm' => __('Are you sure you want to delete # {0}?', $education->id)]) ?>
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
