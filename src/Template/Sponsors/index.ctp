<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Sponsor[]|\Cake\Collection\CollectionInterface $sponsors
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sponsor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sponsors index large-9 medium-8 columns content">
    <h3><?= __('Sponsors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sponsors as $sponsor): ?>
            <tr>
                <td><?= $this->Number->format($sponsor->id) ?></td>
                <td><?= h($sponsor->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sponsor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sponsor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sponsor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sponsor->id)]) ?>
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
