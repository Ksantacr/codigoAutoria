<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Optionsxrol[]|\Cake\Collection\CollectionInterface $optionsxrol
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Optionsxrol'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="optionsxrol index large-9 medium-8 columns content">
    <h3><?= __('Optionsxrol') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('roles_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('options_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($optionsxrol as $optionsxrol): ?>
            <tr>
                <td><?= $this->Number->format($optionsxrol->id) ?></td>
                <td><?= $optionsxrol->has('role') ? $this->Html->link($optionsxrol->role->name, ['controller' => 'Roles', 'action' => 'view', $optionsxrol->role->id]) : '' ?></td>
                <td><?= h($optionsxrol->description) ?></td>
                <td><?= $optionsxrol->has('option') ? $this->Html->link($optionsxrol->option->name, ['controller' => 'Options', 'action' => 'view', $optionsxrol->option->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $optionsxrol->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $optionsxrol->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $optionsxrol->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionsxrol->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
