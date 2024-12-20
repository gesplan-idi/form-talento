<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Language'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languages view content">
            <h3><?= h($language->idioma) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $language->has('user') ? $this->Html->link($language->user->dni, ['controller' => 'Users', 'action' => 'view', $language->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Language Option') ?></th>
                    <td><?= $language->has('language_option') ? $this->Html->link($language->language_option->nombre, ['controller' => 'LanguageOptions', 'action' => 'view', $language->language_option->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Institucion') ?></th>
                    <td><?= h($language->institucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Language Level') ?></th>
                    <td><?= $language->has('language_level') ? $this->Html->link($language->language_level->nivel, ['controller' => 'LanguageLevels', 'action' => 'view', $language->language_level->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($language->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Certificado') ?></th>
                    <td><?= $language->certificado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
