<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExperienceType $experienceType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Experience Type'), ['action' => 'edit', $experienceType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Experience Type'), ['action' => 'delete', $experienceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experienceType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Experience Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Experience Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="experienceTypes view content">
            <h3><?= h($experienceType->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($experienceType->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($experienceType->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
