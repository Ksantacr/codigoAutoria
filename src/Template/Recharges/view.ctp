<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Recharge $recharge
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recharge'), ['action' => 'edit', $recharge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recharge'), ['action' => 'delete', $recharge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recharge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recharges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recharge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Wallets'), ['controller' => 'Wallets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wallet'), ['controller' => 'Wallets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recharges view large-9 medium-8 columns content">
    <h3><?= h($recharge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wallet') ?></th>
            <td><?= $recharge->has('wallet') ? $this->Html->link($recharge->wallet->id, ['controller' => 'Wallets', 'action' => 'view', $recharge->wallet->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($recharge->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recharge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($recharge->amount) ?></td>
        </tr>
    </table>
</div>
