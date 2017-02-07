<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Upload'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="uploads index large-9 medium-8 columns content">
    <h3><?= __('Uploads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
            
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($uploads as $upload): ?>
            <tr>
                <td><?= $this->Number->format($upload->id) ?></td>
                <td><?= h($upload->name) ?></td>
                <td><?= h($upload->username) ?></td>
                <td><?= h($upload->password) ?></td>
                <td><?= h($upload->role) ?></td>
                <td><img src="../img/<?= h($upload->photo) ?>" alt=""></td>
             
                <td class="actions">
                   
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $upload->id],array('class'=>'btn btn-xs btn-info')) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $upload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $upload->id),'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
