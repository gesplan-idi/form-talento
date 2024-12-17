<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Education $education
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Education'), ['action' => 'edit', $education->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Education'), ['action' => 'delete', $education->id], ['confirm' => __('Are you sure you want to delete # {0}?', $education->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Educations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Education'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="educations view content">
            <h3><?= h($education->nombre_titulacion) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $education->has('user') ? $this->Html->link($education->user->dni, ['controller' => 'Users', 'action' => 'view', $education->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre Titulacion') ?></th>
                    <td><?= h($education->nombre_titulacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institucion') ?></th>
                    <td><?= h($education->institucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Education Level') ?></th>
                    <td><?= $education->has('education_level') ? $this->Html->link($education->education_level->nivel, ['controller' => 'EducationLevels', 'action' => 'view', $education->education_level->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($education->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano Finalizacion') ?></th>
                    <td><?= $education->ano_finalizacion === null ? '' : $this->Number->format($education->ano_finalizacion) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
