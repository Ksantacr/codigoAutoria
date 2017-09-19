<?php
/**
  * @var \App\View\AppView $this
  */
?><?= $this->Html->css('base.css')?>
<?= $this->Html->css('cake.css')?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Genders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="genders form large-9 medium-8 columns content">
    <?= $this->Form->create($gender) ?>
    <fieldset>
        <legend><?= __('Add Gender') ?></legend>
        <?php
            echo $this->Form->control('gender');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
