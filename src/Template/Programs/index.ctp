<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Program'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programs index large-9 medium-8 columns content">
    <h3><?= __('Programs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('family') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programs as $program): ?>
            <tr>
                <td><?= $this->Number->format($program->id) ?></td>
                <td><?= h($program->family) ?></td>
                <td><?= h($program->code) ?></td>
                <td><?= h($program->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $program->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $program->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
