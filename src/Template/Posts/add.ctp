<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
            echo $this->Form->input('category');
            echo $this->Form->input('anthor');
            echo $this->Form->input('upload', ['type' => 'file']);
        ?>
         <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-primary btn-md')) ?>
    </fieldset>
   
    <?= $this->Form->end() ?>
</div>
