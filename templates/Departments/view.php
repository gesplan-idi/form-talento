<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departments view content">
            <h3><?= h($department->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($department->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($department->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($department->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Dni') ?></th>
                            <th><?= __('Nombre Apellidos') ?></th>
                            <th><?= __('Fecha Nacimiento') ?></th>
                            <th><?= __('Profesion') ?></th>
                            <th><?= __('Puesto') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Nacionalidad') ?></th>
                            <th><?= __('Foto') ?></th>
                            <th><?= __('Discapacidad') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Categoria Id') ?></th>
                            <th><?= __('Contrato Id') ?></th>
                            <th><?= __('Workplace Id') ?></th>
                            <th><?= __('Experiencia Gesplan') ?></th>
                            <th><?= __('Experiencia Total') ?></th>
                            <th><?= __('Disponibilidad Traslado') ?></th>
                            <th><?= __('Formulario Aceptado') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($department->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->dni) ?></td>
                            <td><?= h($users->nombre_apellidos) ?></td>
                            <td><?= h($users->fecha_nacimiento) ?></td>
                            <td><?= h($users->profesion) ?></td>
                            <td><?= h($users->puesto) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->nacionalidad) ?></td>
                            <td><?= h($users->foto) ?></td>
                            <td><?= h($users->discapacidad) ?></td>
                            <td><?= h($users->department_id) ?></td>
                            <td><?= h($users->categoria_id) ?></td>
                            <td><?= h($users->contrato_id) ?></td>
                            <td><?= h($users->workplace_id) ?></td>
                            <td><?= h($users->experiencia_gesplan) ?></td>
                            <td><?= h($users->experiencia_total) ?></td>
                            <td><?= h($users->disponibilidad_traslado) ?></td>
                            <td><?= h($users->formulario_aceptado) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
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
