<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Recharge[]|\Cake\Collection\CollectionInterface $recharges
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recharge'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Wallets'), ['controller' => 'Wallets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Wallet'), ['controller' => 'Wallets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recharges index large-9 medium-8 columns content">
    <h3><?= __('Recharges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wallets_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recharges as $recharge): ?>
            <tr>
                <td><?= $this->Number->format($recharge->id) ?></td>
                <td><?= $recharge->has('wallet') ? $this->Html->link($recharge->wallet->id, ['controller' => 'Wallets', 'action' => 'view', $recharge->wallet->id]) : '' ?></td>
                <td><?= h($recharge->date) ?></td>
                <td><?= $this->Number->format($recharge->amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recharge->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recharge->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recharge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recharge->id)]) ?>
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
