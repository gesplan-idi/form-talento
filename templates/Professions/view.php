<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profession $profession
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profession'), ['action' => 'edit', $profession->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profession'), ['action' => 'delete', $profession->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profession->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Professions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profession'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="professions view content">
            <h3><?= h($profession->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($profession->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($profession->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($profession->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Dni') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellidos') ?></th>
                            <th><?= __('Fecha Nacimiento') ?></th>
                            <th><?= __('Puesto') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
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
                            <th><?= __('Position Id') ?></th>
                            <th><?= __('Profession Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($profession->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->role) ?></td>
                            <td><?= h($users->dni) ?></td>
                            <td><?= h($users->nombre) ?></td>
                            <td><?= h($users->apellidos) ?></td>
                            <td><?= h($users->fecha_nacimiento) ?></td>
                            <td><?= h($users->puesto) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
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
                            <td><?= h($users->position_id) ?></td>
                            <td><?= h($users->profession_id) ?></td>
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
