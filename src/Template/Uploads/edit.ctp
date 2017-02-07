<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $upload->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $upload->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Uploads'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="uploads form large-9 medium-8 columns content">
    <?= $this->Form->create($upload) ?>
    <fieldset>
        <legend><?= __('Edit Upload') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
            echo $this->Form->file('photo');
            echo $this->Form->input('dir');
        ?>
         <?= $this->Form->button(__('Submit'),array('class'=>'btn btn btn-success')) ?>
    </fieldset>
   
    <?= $this->Form->end() ?>
</div>
