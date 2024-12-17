<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LanguageLevel $languageLevel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Language Level'), ['action' => 'edit', $languageLevel->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Language Level'), ['action' => 'delete', $languageLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageLevel->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Language Levels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Language Level'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languageLevels view content">
            <h3><?= h($languageLevel->nivel) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nivel') ?></th>
                    <td><?= h($languageLevel->nivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($languageLevel->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
