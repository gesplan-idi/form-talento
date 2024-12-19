<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('Nuevo usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('dni') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
                    <th><?= $this->Paginator->sort('profesion') ?></th>
                    <th><?= $this->Paginator->sort('puesto') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('nacionalidad') ?></th>
                    <th><?= $this->Paginator->sort('foto') ?></th>
                    <th><?= $this->Paginator->sort('discapacidad') ?></th>
                    <th><?= $this->Paginator->sort('department_id') ?></th>
                    <th><?= $this->Paginator->sort('categoria_id') ?></th>
                    <th><?= $this->Paginator->sort('contrato_id') ?></th>
                    <th><?= $this->Paginator->sort('workplace_id') ?></th>
                    <th><?= $this->Paginator->sort('experiencia_gesplan') ?></th>
                    <th><?= $this->Paginator->sort('experiencia_total') ?></th>
                    <th><?= $this->Paginator->sort('disponibilidad_traslado') ?></th>
                    <th><?= $this->Paginator->sort('formulario_aceptado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->dni) ?></td>
                    <td><?= h($user->nombre) ?></td>
                    <td><?= h($user->apellidos) ?></td>
                    <td><?= h($user->fecha_nacimiento) ?></td>
                    <td><?= h($user->profesion) ?></td>
                    <td><?= h($user->puesto) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->nacionalidad) ?></td>
                    <td><?= h($user->foto) ?></td>
                    <td><?= h($user->discapacidad) ?></td>
                    <td><?= $user->has('department') ? $this->Html->link($user->department->nombre, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
                    <td><?= $user->has('category') ? $this->Html->link($user->category->nombre, ['controller' => 'Categories', 'action' => 'view', $user->category->id]) : '' ?></td>
                    <td><?= $user->has('contract') ? $this->Html->link($user->contract->tipo, ['controller' => 'Contracts', 'action' => 'view', $user->contract->id]) : '' ?></td>
                    <td><?= $user->has('workplace') ? $this->Html->link($user->workplace->nombre, ['controller' => 'Workplaces', 'action' => 'view', $user->workplace->id]) : '' ?></td>
                    <td><?= $this->Number->format($user->experiencia_gesplan) ?></td>
                    <td><?= $this->Number->format($user->experiencia_total) ?></td>
                    <td><?= h($user->disponibilidad_traslado) ?></td>
                    <td><?= h($user->formulario_aceptado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
