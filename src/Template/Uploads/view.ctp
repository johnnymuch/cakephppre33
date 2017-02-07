<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Upload'), ['action' => 'edit', $upload->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Upload'), ['action' => 'delete', $upload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $upload->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Uploads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Upload'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="uploads view large-9 medium-8 columns content">
    <h3><?= h($upload->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($upload->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($upload->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($upload->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($upload->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
           <td><img src="<?= h($upload->photo) ?>" alt=""></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir') ?></th>
            <td><?= h($upload->dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($upload->id) ?></td>
        </tr>
    </table>
</div>
