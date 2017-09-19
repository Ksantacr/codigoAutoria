<?php
/**
  * @var \App\View\AppView $this
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recharge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recharge->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recharges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Wallets'), ['controller' => 'Wallets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wallet'), ['controller' => 'Wallets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recharges form large-9 medium-8 columns content">
    <?= $this->Form->create($recharge) ?>
    <fieldset>
        <legend><?= __('Edit Recharge') ?></legend>
        <?php
            echo $this->Form->control('wallets_id', ['options' => $wallets]);
            echo $this->Form->control('date');
            echo $this->Form->control('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
