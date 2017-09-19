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
                ['action' => 'delete', $channel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $channel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Channels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matchs'), ['controller' => 'Matchs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Match'), ['controller' => 'Matchs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="channels form large-9 medium-8 columns content">
    <?= $this->Form->create($channel) ?>
    <fieldset>
        <legend><?= __('Edit Channel') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('languages_id', ['options' => $languages]);
            echo $this->Form->control('matchs_id', ['options' => $matchs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
