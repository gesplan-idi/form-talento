<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Experience> $experiences
 */
?>
<div class="experiences index content">
    <?= $this->Html->link(__('New Experience'), ['action' => 'add', '?' => ['user_id' => $user_id]], ['class' => 'button float-right']) ?>
    <h3><?= __('Experiences') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('project_id') ?></th>
                    <th><?= $this->Paginator->sort('otro_proyecto') ?></th>
                    <th><?= $this->Paginator->sort('nombre_empresa') ?></th>
                    <th><?= $this->Paginator->sort('cargo') ?></th>
                    <th><?= $this->Paginator->sort('periodo_inicio') ?></th>
                    <th><?= $this->Paginator->sort('periodo_fin') ?></th>
                    <th><?= $this->Paginator->sort('tipo_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($experiences as $experience): ?>
                <tr>
                    <td><?= $this->Number->format($experience->id) ?></td>
                    <td><?= $experience->has('user') ? $this->Html->link($experience->user->dni, ['controller' => 'Users', 'action' => 'view', $experience->user->id]) : '' ?></td>
                    <td><?= $experience->has('project') ? $this->Html->link($experience->project->nombre, ['controller' => 'Projects', 'action' => 'view', $experience->project->id]) : '' ?></td>
                    <td><?= h($experience->otro_proyecto) ?></td>
                    <td><?= h($experience->nombre_empresa) ?></td>
                    <td><?= h($experience->cargo) ?></td>
                    <td><?= h($experience->periodo_inicio) ?></td>
                    <td><?= h($experience->periodo_fin) ?></td>
                    <td><?= $experience->has('experience_type') ? $this->Html->link($experience->experience_type->nombre, ['controller' => 'ExperienceTypes', 'action' => 'view', $experience->experience_type->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $experience->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experience->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]) ?>
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
