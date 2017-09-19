<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Creditcard $creditcard
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Creditcard'), ['action' => 'edit', $creditcard->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Creditcard'), ['action' => 'delete', $creditcard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $creditcard->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Creditcards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Creditcard'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="creditcards view large-9 medium-8 columns content">
    <h3><?= h($creditcard->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Placeholder') ?></th>
            <td><?= h($creditcard->placeholder) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit Number') ?></th>
            <td><?= h($creditcard->credit_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiration Date') ?></th>
            <td><?= h($creditcard->expiration_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank') ?></th>
            <td><?= $creditcard->has('bank') ? $this->Html->link($creditcard->bank->name, ['controller' => 'Banks', 'action' => 'view', $creditcard->bank->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($creditcard->id) ?></td>
        </tr>
    </table>
</div>
