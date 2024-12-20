<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aspiration> $aspirations
 */
?>
<div class="aspirations index content">
    <?= $this->Html->link(__('New Aspiration'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aspirations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('posicion_interes_pregunta') ?></th>
                    <th><?= $this->Paginator->sort('proyecto_nacional') ?></th>
                    <th><?= $this->Paginator->sort('proyecto_internacional') ?></th>
                    <th><?= $this->Paginator->sort('disponibility_id') ?></th>
                    <th><?= $this->Paginator->sort('disponibilidad_viajar') ?></th>
                    <th><?= $this->Paginator->sort('cambio_isla') ?></th>
                    <th><?= $this->Paginator->sort('isla_destino') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aspirations as $aspiration): ?>
                <tr>
                    <td><?= $this->Number->format($aspiration->id) ?></td>
                    <td><?= $aspiration->has('user') ? $this->Html->link($aspiration->user->dni, ['controller' => 'Users', 'action' => 'view', $aspiration->user->id]) : '' ?></td>
                    <td><?= h($aspiration->posicion_interes_pregunta) ?></td>
                    <td><?= h($aspiration->proyecto_nacional) ?></td>
                    <td><?= h($aspiration->proyecto_internacional) ?></td>
                    <td><?= $aspiration->has('disponibility') ? $this->Html->link($aspiration->disponibility->nombre, ['controller' => 'Disponibilities', 'action' => 'view', $aspiration->disponibility->id]) : '' ?></td>
                    <td><?= h($aspiration->disponibilidad_viajar) ?></td>
                    <td><?= h($aspiration->cambio_isla) ?></td>
                    <td><?= h($aspiration->isla_destino) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aspiration->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aspiration->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aspiration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aspiration->id)]) ?>
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
