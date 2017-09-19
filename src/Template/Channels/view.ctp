<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Channel $channel
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Channel'), ['action' => 'edit', $channel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Channel'), ['action' => 'delete', $channel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $channel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Channels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Channel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matchs'), ['controller' => 'Matchs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matchs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="channels view large-9 medium-8 columns content">
    <h3><?= h($channel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($channel->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= $channel->has('language') ? $this->Html->link($channel->language->id, ['controller' => 'Languages', 'action' => 'view', $channel->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match') ?></th>
            <td><?= $channel->has('match') ? $this->Html->link($channel->match->id, ['controller' => 'Matchs', 'action' => 'view', $channel->match->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($channel->id) ?></td>
        </tr>
    </table>
</div>
