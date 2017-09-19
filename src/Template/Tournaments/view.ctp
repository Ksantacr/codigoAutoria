<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Tournament $tournament
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tournament'), ['action' => 'edit', $tournament->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tournament'), ['action' => 'delete', $tournament->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tournament->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tournaments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tournament'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sponsors'), ['controller' => 'Sponsors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sponsor'), ['controller' => 'Sponsors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tournaments view large-9 medium-8 columns content">
    <h3><?= h($tournament->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sponsor') ?></th>
            <td><?= $tournament->has('sponsor') ? $this->Html->link($tournament->sponsor->name, ['controller' => 'Sponsors', 'action' => 'view', $tournament->sponsor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($tournament->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organizer') ?></th>
            <td><?= h($tournament->organizer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tournament->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('StartDate') ?></th>
            <td><?= h($tournament->startDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EndDate') ?></th>
            <td><?= h($tournament->endDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($tournament->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tournament->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PrizePool') ?></th>
            <td><?= $this->Number->format($tournament->prizePool) ?></td>
        </tr>
    </table>
</div>
