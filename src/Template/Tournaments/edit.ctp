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
                ['action' => 'delete', $tournament->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tournament->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tournaments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sponsors'), ['controller' => 'Sponsors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sponsor'), ['controller' => 'Sponsors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tournaments form large-9 medium-8 columns content">
    <?= $this->Form->create($tournament) ?>
    <fieldset>
        <legend><?= __('Edit Tournament') ?></legend>
        <?php
            echo $this->Form->control('sponsors_id', ['options' => $sponsors]);
            echo $this->Form->control('prizePool');
            echo $this->Form->control('type');
            echo $this->Form->control('organizer');
            echo $this->Form->control('name');
            echo $this->Form->control('startDate');
            echo $this->Form->control('endDate');
            echo $this->Form->control('location');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
