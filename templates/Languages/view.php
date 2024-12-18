<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Editar idioma'), ['action' => 'edit', $language->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Eliminar idioma'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar idiomas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languages view content">
            <h3><?= h($language->idioma) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $language->has('user') ? $this->Html->link($language->user->dni, ['controller' => 'Users', 'action' => 'view', $language->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Idioma') ?></th>
                    <td><?= h($language->idioma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Institución') ?></th>
                    <td><?= h($language->institucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nivel') ?></th>
                    <td><?= $language->has('language_level') ? $this->Html->link($language->language_level->nivel, ['controller' => 'LanguageLevels', 'action' => 'view', $language->language_level->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Certificado') ?></th>
                    <td><?= $language->certificado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
