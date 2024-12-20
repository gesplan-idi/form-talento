<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspiration $aspiration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aspiration'), ['action' => 'edit', $aspiration->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aspiration'), ['action' => 'delete', $aspiration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aspiration->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aspirations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aspiration'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aspirations view content">
            <h3><?= h($aspiration->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $aspiration->has('user') ? $this->Html->link($aspiration->user->dni, ['controller' => 'Users', 'action' => 'view', $aspiration->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponibility') ?></th>
                    <td><?= $aspiration->has('disponibility') ? $this->Html->link($aspiration->disponibility->nombre, ['controller' => 'Disponibilities', 'action' => 'view', $aspiration->disponibility->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Isla Destino') ?></th>
                    <td><?= h($aspiration->isla_destino) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aspiration->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Posicion Interes Pregunta') ?></th>
                    <td><?= $aspiration->posicion_interes_pregunta ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Proyecto Nacional') ?></th>
                    <td><?= $aspiration->proyecto_nacional ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Proyecto Internacional') ?></th>
                    <td><?= $aspiration->proyecto_internacional ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponibilidad Viajar') ?></th>
                    <td><?= $aspiration->disponibilidad_viajar ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Cambio Isla') ?></th>
                    <td><?= $aspiration->cambio_isla ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Intereses') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aspiration->intereses)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
