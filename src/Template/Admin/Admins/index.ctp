<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admins
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Options'), ['controller' => 'Options', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Option'), ['controller' => 'Options', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Surveys'), ['controller' => 'Surveys', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Survey'), ['controller' => 'Surveys', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="admins index large-9 medium-8 columns content">
    <h3><?= __('Admins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('password') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('del_flg') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('token') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $page = $this->Paginator->counter(['format' => __('{{page}}')]);
            $no = 1;
            if ($page > 2)
                $no = $page * 20 - 19;
            else if ($page == 2)
                $no = $page * 10 + 1; ?>

            <?php foreach ($admins as $admin) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= h($admin->email) ?></td>
                    <!-- <td><?= h($admin->password) ?></td> -->
                    <!-- <td><?= h($admin->del_flg) ?></td> -->
                    <td><?= h($admin->created) ?></td>
                    <!-- <td><?= h($admin->modified) ?></td> -->
                    <!-- <td><?= h($admin->token) ?></td> -->
                    <td class="actions">
                        <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $admin->id]) ?> -->
                        <!-- <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->id]) ?> -->
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?>
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