<?php
/**
  * @var \App\View\AppView $this
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Creditcards'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Banks'), ['controller' => 'Banks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bank'), ['controller' => 'Banks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="creditcards form large-9 medium-8 columns content">
    <?= $this->Form->create($creditcard) ?>
    <fieldset>
        <legend><?= __('Add Creditcard') ?></legend>
        <?php
            echo $this->Form->control('placeholder');
            echo $this->Form->control('credit_number');
            echo $this->Form->control('expiration_date');
            echo $this->Form->control('banks_id', ['options' => $banks]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
