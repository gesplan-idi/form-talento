<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->dni) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dni') ?></th>
                    <td><?= h($user->dni) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($user->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($user->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profesion') ?></th>
                    <td><?= h($user->profesion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Puesto') ?></th>
                    <td><?= h($user->puesto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nacionalidad') ?></th>
                    <td><?= h($user->nacionalidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foto') ?></th>
                    <td><?= h($user->foto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $user->has('department') ? $this->Html->link($user->department->nombre, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $user->has('category') ? $this->Html->link($user->category->nombre, ['controller' => 'Categories', 'action' => 'view', $user->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Contract') ?></th>
                    <td><?= $user->has('contract') ? $this->Html->link($user->contract->tipo, ['controller' => 'Contracts', 'action' => 'view', $user->contract->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Workplace') ?></th>
                    <td><?= $user->has('workplace') ? $this->Html->link($user->workplace->nombre, ['controller' => 'Workplaces', 'action' => 'view', $user->workplace->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponibilidad Traslado') ?></th>
                    <td><?= h($user->disponibilidad_traslado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Experiencia Gesplan') ?></th>
                    <td><?= $this->Number->format($user->experiencia_gesplan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Experiencia Total') ?></th>
                    <td><?= $this->Number->format($user->experiencia_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Nacimiento') ?></th>
                    <td><?= h($user->fecha_nacimiento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discapacidad') ?></th>
                    <td><?= $user->discapacidad ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Formulario Aceptado') ?></th>
                    <td><?= $user->formulario_aceptado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Aspirations') ?></h4>
                <?php if (!empty($user->aspirations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Intereses') ?></th>
                            <th><?= __('Posicion Interes') ?></th>
                            <th><?= __('Proyecto Nacional') ?></th>
                            <th><?= __('Proyecto Internacional') ?></th>
                            <th><?= __('Disponibilidad Retos') ?></th>
                            <th><?= __('Disponibilidad Viajar') ?></th>
                            <th><?= __('Cambio Isla') ?></th>
                            <th><?= __('Isla Destino') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->aspirations as $aspirations) : ?>
                        <tr>
                            <td><?= h($aspirations->id) ?></td>
                            <td><?= h($aspirations->user_id) ?></td>
                            <td><?= h($aspirations->intereses) ?></td>
                            <td><?= h($aspirations->posicion_interes) ?></td>
                            <td><?= h($aspirations->proyecto_nacional) ?></td>
                            <td><?= h($aspirations->proyecto_internacional) ?></td>
                            <td><?= h($aspirations->disponibilidad_retos) ?></td>
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
            <div class="related">
                <h4><?= __('Related Educations') ?></h4>
                <?php if (!empty($user->educations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Nombre Titulacion') ?></th>
                            <th><?= __('Ano Finalizacion') ?></th>
                            <th><?= __('Institucion') ?></th>
                            <th><?= __('Nivel Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->educations as $educations) : ?>
                        <tr>
                            <td><?= h($educations->id) ?></td>
                            <td><?= h($educations->user_id) ?></td>
                            <td><?= h($educations->nombre_titulacion) ?></td>
                            <td><?= h($educations->ano_finalizacion) ?></td>
                            <td><?= h($educations->institucion) ?></td>
                            <td><?= h($educations->nivel_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Educations', 'action' => 'view', $educations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Educations', 'action' => 'edit', $educations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Educations', 'action' => 'delete', $educations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Experiences') ?></h4>
                <?php if (!empty($user->experiences)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Tipo') ?></th>
                            <th><?= __('Nombre Empresa') ?></th>
                            <th><?= __('Nombre Proyecto') ?></th>
                            <th><?= __('Cargo') ?></th>
                            <th><?= __('Periodo Inicio') ?></th>
                            <th><?= __('Periodo Fin') ?></th>
                            <th><?= __('Responsabilidades') ?></th>
                            <th><?= __('Logros') ?></th>
                            <th><?= __('Trabajos') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->experiences as $experiences) : ?>
                        <tr>
                            <td><?= h($experiences->id) ?></td>
                            <td><?= h($experiences->user_id) ?></td>
                            <td><?= h($experiences->tipo) ?></td>
                            <td><?= h($experiences->nombre_empresa) ?></td>
                            <td><?= h($experiences->nombre_proyecto) ?></td>
                            <td><?= h($experiences->cargo) ?></td>
                            <td><?= h($experiences->periodo_inicio) ?></td>
                            <td><?= h($experiences->periodo_fin) ?></td>
                            <td><?= h($experiences->responsabilidades) ?></td>
                            <td><?= h($experiences->logros) ?></td>
                            <td><?= h($experiences->trabajos) ?></td>
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
            <div class="related">
                <h4><?= __('Related Languages') ?></h4>
                <?php if (!empty($user->languages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Idioma') ?></th>
                            <th><?= __('Certificado') ?></th>
                            <th><?= __('Institucion') ?></th>
                            <th><?= __('Nivel Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->languages as $languages) : ?>
                        <tr>
                            <td><?= h($languages->id) ?></td>
                            <td><?= h($languages->user_id) ?></td>
                            <td><?= h($languages->idioma) ?></td>
                            <td><?= h($languages->certificado) ?></td>
                            <td><?= h($languages->institucion) ?></td>
                            <td><?= h($languages->nivel_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Languages', 'action' => 'view', $languages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Languages', 'action' => 'edit', $languages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Languages', 'action' => 'delete', $languages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Skills') ?></h4>
                <?php if (!empty($user->skills)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Skill Category Id') ?></th>
                            <th><?= __('Otros') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->skills as $skills) : ?>
                        <tr>
                            <td><?= h($skills->id) ?></td>
                            <td><?= h($skills->user_id) ?></td>
                            <td><?= h($skills->skill_category_id) ?></td>
                            <td><?= h($skills->otros) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Skills', 'action' => 'view', $skills->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Skills', 'action' => 'edit', $skills->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skills', 'action' => 'delete', $skills->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skills->id)]) ?>
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
