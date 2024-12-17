<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EducationLevel $educationLevel
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Education Level'), ['action' => 'edit', $educationLevel->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Education Level'), ['action' => 'delete', $educationLevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educationLevel->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Education Levels'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Education Level'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="educationLevels view content">
            <h3><?= h($educationLevel->nivel) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nivel') ?></th>
                    <td><?= h($educationLevel->nivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($educationLevel->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
