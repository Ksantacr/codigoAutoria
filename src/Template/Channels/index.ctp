<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Channel[]|\Cake\Collection\CollectionInterface $channels
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Channel'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matchs'), ['controller' => 'Matchs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matchs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="channels index large-9 medium-8 columns content">
    <h3><?= __('Channels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('languages_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matchs_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($channels as $channel): ?>
            <tr>
                <td><?= $this->Number->format($channel->id) ?></td>
                <td><?= h($channel->name) ?></td>
                <td><?= $channel->has('language') ? $this->Html->link($channel->language->id, ['controller' => 'Languages', 'action' => 'view', $channel->language->id]) : '' ?></td>
                <td><?= $channel->has('match') ? $this->Html->link($channel->match->id, ['controller' => 'Matchs', 'action' => 'view', $channel->match->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $channel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $channel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $channel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $channel->id)]) ?>
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
