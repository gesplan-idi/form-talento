<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Project'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projects view content">
            <h3><?= h($project->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($project->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($project->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Experiences') ?></h4>
                <?php if (!empty($project->experiences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Project Id') ?></th>
                            <th><?= __('Otro Proyecto') ?></th>
                            <th><?= __('Nombre Empresa') ?></th>
                            <th><?= __('Cargo') ?></th>
                            <th><?= __('Periodo Inicio') ?></th>
                            <th><?= __('Periodo Fin') ?></th>
                            <th><?= __('Responsabilidades') ?></th>
                            <th><?= __('Logros') ?></th>
                            <th><?= __('Trabajos') ?></th>
                            <th><?= __('Tipo Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($project->experiences as $experiences) : ?>
                        <tr>
                            <td><?= h($experiences->id) ?></td>
                            <td><?= h($experiences->user_id) ?></td>
                            <td><?= h($experiences->project_id) ?></td>
                            <td><?= h($experiences->otro_proyecto) ?></td>
                            <td><?= h($experiences->nombre_empresa) ?></td>
                            <td><?= h($experiences->cargo) ?></td>
                            <td><?= h($experiences->periodo_inicio) ?></td>
                            <td><?= h($experiences->periodo_fin) ?></td>
                            <td><?= h($experiences->responsabilidades) ?></td>
                            <td><?= h($experiences->logros) ?></td>
                            <td><?= h($experiences->trabajos) ?></td>
                            <td><?= h($experiences->tipo_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Experiences', 'action' => 'view', $experiences->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Experiences', 'action' => 'edit', $experiences->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Experiences', 'action' => 'delete', $experiences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experiences->id)]) ?>
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
