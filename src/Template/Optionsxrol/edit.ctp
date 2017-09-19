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
                ['action' => 'delete', $optionsxrol->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $optionsxrol->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Optionsxrol'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="optionsxrol form large-9 medium-8 columns content">
    <?= $this->Form->create($optionsxrol) ?>
    <fieldset>
        <legend><?= __('Edit Optionsxrol') ?></legend>
        <?php
            echo $this->Form->control('roles_id', ['options' => $roles]);
            echo $this->Form->control('description');
            echo $this->Form->control('options_id', ['options' => $options]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
