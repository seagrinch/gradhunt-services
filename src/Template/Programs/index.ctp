<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('List of Programs'), ['controller'=>'programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List of Schools'), ['controller'=>'schools', 'action' => 'index']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('JSON List of All Programs'), ['action' => 'index', '_ext'=>'json']) ?> </li>
        <li><?= $this->Html->link(__('JSON List of Majors'), ['action' => 'majors', '_ext'=>'json']) ?> </li>
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programs as $program): ?>
            <tr>
                <td><?= $this->Number->format($program->id) ?></td>
                <td><?= h($program->family) ?></td>
                <td><?= h($program->code) ?></td>
                <td><?= $this->Html->link($program->title, ['action' => 'view', $program->id]) ?></td>
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
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
