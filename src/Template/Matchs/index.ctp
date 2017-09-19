<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Match[]|\Cake\Collection\CollectionInterface $matchs
  */
?>

<?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Match'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tournaments'), ['controller' => 'Tournaments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tournament'), ['controller' => 'Tournaments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matchs index large-9 medium-8 columns content">
    <h3><?= __('Matchs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('second_team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('result') ?></th>
                <th scope="col"><?= $this->Paginator->sort('round') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tournaments_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matchs as $match): ?>
            <tr>
                <td><?= $this->Number->format($match->id) ?></td>
                <td><?= h($match->date) ?></td>
                <td><?= $this->Number->format($match->first_team_id) ?></td>
                <td><?= $match->has('team') ? $this->Html->link($match->team->name, ['controller' => 'Teams', 'action' => 'view', $match->team->id]) : '' ?></td>
                <td><?= $this->Number->format($match->result) ?></td>
                <td><?= h($match->round) ?></td>
                <td><?= $match->has('tournament') ? $this->Html->link($match->tournament->name, ['controller' => 'Tournaments', 'action' => 'view', $match->tournament->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $match->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $match->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id)]) ?>
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
