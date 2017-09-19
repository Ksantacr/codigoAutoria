<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Match $match
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Match'), ['action' => 'edit', $match->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Match'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matchs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tournaments'), ['controller' => 'Tournaments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tournament'), ['controller' => 'Tournaments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matchs view large-9 medium-8 columns content">
    <h3><?= h($match->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($match->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $match->has('team') ? $this->Html->link($match->team->name, ['controller' => 'Teams', 'action' => 'view', $match->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Round') ?></th>
            <td><?= h($match->round) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tournament') ?></th>
            <td><?= $match->has('tournament') ? $this->Html->link($match->tournament->name, ['controller' => 'Tournaments', 'action' => 'view', $match->tournament->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($match->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Team Id') ?></th>
            <td><?= $this->Number->format($match->first_team_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Result') ?></th>
            <td><?= $this->Number->format($match->result) ?></td>
        </tr>
    </table>
</div>
