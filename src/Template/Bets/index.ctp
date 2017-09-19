<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Bet[]|\Cake\Collection\CollectionInterface $bets
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matchs'), ['controller' => 'Matchs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matchs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bets index large-9 medium-8 columns content">
    <h3><?= __('Bets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matchs_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teams_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bets as $bet): ?>
            <tr>
                <td><?= $this->Number->format($bet->id) ?></td>
                <td><?= $this->Number->format($bet->amount) ?></td>
                <td><?= $bet->has('user') ? $this->Html->link($bet->user->id, ['controller' => 'Users', 'action' => 'view', $bet->user->id]) : '' ?></td>
                <td><?= $bet->has('match') ? $this->Html->link($bet->match->id, ['controller' => 'Matchs', 'action' => 'view', $bet->match->id]) : '' ?></td>
                <td><?= $bet->has('team') ? $this->Html->link($bet->team->name, ['controller' => 'Teams', 'action' => 'view', $bet->team->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bet->id)]) ?>
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
