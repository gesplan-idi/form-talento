<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Experience $experience
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Experience'), ['action' => 'edit', $experience->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Experience'), ['action' => 'delete', $experience->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Experiences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Experience'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="experiences view content">
            <h3><?= h($experience->tipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $experience->has('user') ? $this->Html->link($experience->user->dni, ['controller' => 'Users', 'action' => 'view', $experience->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre Empresa') ?></th>
                    <td><?= h($experience->nombre_empresa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre Proyecto') ?></th>
                    <td><?= h($experience->nombre_proyecto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($experience->cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($experience->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Id') ?></th>
                    <td><?= $this->Number->format($experience->tipo_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodo Inicio') ?></th>
                    <td><?= h($experience->periodo_inicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Periodo Fin') ?></th>
                    <td><?= h($experience->periodo_fin) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Responsabilidades') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($experience->responsabilidades)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Logros') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($experience->logros)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Trabajos') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($experience->trabajos)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
