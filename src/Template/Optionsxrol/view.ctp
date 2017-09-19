<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Optionsxrol $optionsxrol
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Optionsxrol'), ['action' => 'edit', $optionsxrol->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Optionsxrol'), ['action' => 'delete', $optionsxrol->id], ['confirm' => __('Are you sure you want to delete # {0}?', $optionsxrol->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Optionsxrol'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Optionsxrol'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="optionsxrol view large-9 medium-8 columns content">
    <h3><?= h($optionsxrol->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $optionsxrol->has('role') ? $this->Html->link($optionsxrol->role->name, ['controller' => 'Roles', 'action' => 'view', $optionsxrol->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($optionsxrol->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option') ?></th>
            <td><?= $optionsxrol->has('option') ? $this->Html->link($optionsxrol->option->name, ['controller' => 'Options', 'action' => 'view', $optionsxrol->option->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($optionsxrol->id) ?></td>
        </tr>
    </table>
</div>
