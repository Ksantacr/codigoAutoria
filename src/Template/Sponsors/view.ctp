<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Sponsor $sponsor
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sponsor'), ['action' => 'edit', $sponsor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sponsor'), ['action' => 'delete', $sponsor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sponsor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sponsors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sponsor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sponsors view large-9 medium-8 columns content">
    <h3><?= h($sponsor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($sponsor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sponsor->id) ?></td>
        </tr>
    </table>
</div>
