<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Bet $bet
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bet'), ['action' => 'edit', $bet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bet'), ['action' => 'delete', $bet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matchs'), ['controller' => 'Matchs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matchs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bets view large-9 medium-8 columns content">
    <h3><?= h($bet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $bet->has('user') ? $this->Html->link($bet->user->id, ['controller' => 'Users', 'action' => 'view', $bet->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Match') ?></th>
            <td><?= $bet->has('match') ? $this->Html->link($bet->match->id, ['controller' => 'Matchs', 'action' => 'view', $bet->match->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $bet->has('team') ? $this->Html->link($bet->team->name, ['controller' => 'Teams', 'action' => 'view', $bet->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($bet->amount) ?></td>
        </tr>
    </table>
</div>
