<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LanguageOption $languageOption
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Language Option'), ['action' => 'edit', $languageOption->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Language Option'), ['action' => 'delete', $languageOption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $languageOption->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Language Options'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Language Option'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="languageOptions view content">
            <h3><?= h($languageOption->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($languageOption->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($languageOption->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
