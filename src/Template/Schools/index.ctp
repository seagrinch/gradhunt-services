<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Favorites'), ['controller' => 'Favorites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Favorite'), ['controller' => 'Favorites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schools index large-9 medium-8 columns content">
    <h3><?= __('Schools') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('INSTNM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CITY') ?></th>
                <th scope="col"><?= $this->Paginator->sort('STABBR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ZIP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('OBEREG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('WEBADDR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('HLOFFER') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LOCALE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('INSTCAT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('INSTSIZE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('APPLFEEG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TUITION6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TUITION7') ?></th>
                <th scope="col"><?= $this->Paginator->sort('APPLCN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADMSSN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ENRLT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SATMT25') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SATMT75') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SATWR25') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SATWR75') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schools as $school): ?>
            <tr>
                <td><?= $this->Number->format($school->id) ?></td>
                <td><?= h($school->INSTNM) ?></td>
                <td><?= h($school->CITY) ?></td>
                <td><?= h($school->STABBR) ?></td>
                <td><?= h($school->ZIP) ?></td>
                <td><?= h($school->OBEREG) ?></td>
                <td><?= h($school->WEBADDR) ?></td>
                <td><?= h($school->HLOFFER) ?></td>
                <td><?= h($school->LOCALE) ?></td>
                <td><?= h($school->INSTCAT) ?></td>
                <td><?= h($school->INSTSIZE) ?></td>
                <td><?= h($school->APPLFEEG) ?></td>
                <td><?= h($school->TUITION6) ?></td>
                <td><?= h($school->TUITION7) ?></td>
                <td><?= h($school->APPLCN) ?></td>
                <td><?= h($school->ADMSSN) ?></td>
                <td><?= h($school->ENRLT) ?></td>
                <td><?= h($school->SATMT25) ?></td>
                <td><?= h($school->SATMT75) ?></td>
                <td><?= h($school->SATWR25) ?></td>
                <td><?= h($school->SATWR75) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $school->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $school->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?>
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
