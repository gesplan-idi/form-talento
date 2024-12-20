<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disponibility $disponibility
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Disponibility'), ['action' => 'edit', $disponibility->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Disponibility'), ['action' => 'delete', $disponibility->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disponibility->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Disponibilities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Disponibility'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disponibilities view content">
            <h3><?= h($disponibility->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($disponibility->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($disponibility->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Aspirations') ?></h4>
                <?php if (!empty($disponibility->aspirations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Intereses') ?></th>
                            <th><?= __('Posicion Interes Pregunta') ?></th>
                            <th><?= __('Proyecto Nacional') ?></th>
                            <th><?= __('Proyecto Internacional') ?></th>
                            <th><?= __('Disponibility Id') ?></th>
                            <th><?= __('Disponibilidad Viajar') ?></th>
                            <th><?= __('Cambio Isla') ?></th>
                            <th><?= __('Isla Destino') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($disponibility->aspirations as $aspirations) : ?>
                        <tr>
                            <td><?= h($aspirations->id) ?></td>
                            <td><?= h($aspirations->user_id) ?></td>
                            <td><?= h($aspirations->intereses) ?></td>
                            <td><?= h($aspirations->posicion_interes_pregunta) ?></td>
                            <td><?= h($aspirations->proyecto_nacional) ?></td>
                            <td><?= h($aspirations->proyecto_internacional) ?></td>
                            <td><?= h($aspirations->disponibility_id) ?></td>
                            <td><?= h($aspirations->disponibilidad_viajar) ?></td>
                            <td><?= h($aspirations->cambio_isla) ?></td>
                            <td><?= h($aspirations->isla_destino) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Aspirations', 'action' => 'view', $aspirations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Aspirations', 'action' => 'edit', $aspirations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aspirations', 'action' => 'delete', $aspirations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aspirations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
