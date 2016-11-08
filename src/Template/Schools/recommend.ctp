<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('List of Programs'), ['controller'=>'programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List of Schools'), ['controller'=>'schools', 'action' => 'index']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('JSON List of Schools'), ['action' => 'index', '_ext'=>'json']) ?> </li>
    </ul>
</nav>
<div class="schools index large-9 medium-8 columns content">
    <h3><?= __('Schools') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('INSTNM') ?></th>
                <th scope="col"><?= $this->Paginator->sort('OBEREG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Offerings.PMASTR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Offerings.PDOCRS') ?></th>
                <th scope="col"><?= $this->Paginator->sort('INSTSIZE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SATMT75') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schools as $school): ?>
            <tr>
                <td><?= $this->Number->format($school->id) ?></td>
                <td><?= $this->Html->link($school->INSTNM, ['action' => 'view', $school->id]) ?></td>
                <td><?= h($school->OBEREG) ?></td>
                <td><?= h($school->_matchingData['Offerings']->PMASTR) ?></td>
                <td><?= h($school->_matchingData['Offerings']->PDOCRS) ?></td>
                <td><?= h($school->INSTSIZE) ?></td>
                <td><?= h($school->SATMT75) ?></td>
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
