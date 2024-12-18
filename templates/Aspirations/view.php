<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspiration $aspiration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar Aspiración'), ['action' => 'edit', $aspiration->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar aspiración'), ['action' => 'delete', $aspiration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aspiration->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Aspiraciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aspirations view content">
            <h3><?= h($aspiration->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $aspiration->has('user') ? $this->Html->link($aspiration->user->dni, ['controller' => 'Users', 'action' => 'view', $aspiration->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponibilidad Retos') ?></th>
                    <td><?= h($aspiration->disponibilidad_retos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Isla Destino') ?></th>
                    <td><?= h($aspiration->isla_destino) ?></td>
                </tr>
                <tr>
                    <th><?= __('Posicion Interes') ?></th>
                    <td><?= $aspiration->posicion_interes ? __('Sí') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Proyecto Nacional') ?></th>
                    <td><?= $aspiration->proyecto_nacional ? __('Sí') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Proyecto Internacional') ?></th>
                    <td><?= $aspiration->proyecto_internacional ? __('Sí') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponibilidad Viajar') ?></th>
                    <td><?= $aspiration->disponibilidad_viajar ? __('Sí') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Cambio Isla') ?></th>
                    <td><?= $aspiration->cambio_isla ? __('Sí') : __('No'); ?></td>
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
