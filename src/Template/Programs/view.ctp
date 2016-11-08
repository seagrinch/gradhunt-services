<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('List of Programs'), ['controller'=>'programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List of Schools'), ['controller'=>'schools', 'action' => 'index']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('This Program as JSON'), ['action' => 'view', $program->id, '_ext'=>'json']) ?> </li>
    </ul>
</nav>
<div class="programs view large-9 medium-8 columns content">
    <h3><?= h($program->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Family') ?></th>
            <td><?= h($program->family) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($program->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($program->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($program->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Definition') ?></h4>
        <?= $this->Text->autoParagraph(h($program->definition)); ?>
    </div>
    <div class="related">
        <h4><?= __('Schools with this Program') ?></h4>
        <?php if (!empty($program->offerings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('School Name') ?></th>
                <th scope="col"><?= __('PMASTR') ?></th>
                <th scope="col"><?= __('PDOCRS') ?></th>
            </tr>
            <?php foreach ($program->offerings as $offerings): ?>
            <tr>
                <td><?= h($offerings->school_id) ?></td>
                <td><?= $this->Html->link($offerings->school->INSTNM,['controller'=>'schools','action'=>'view',$offerings->school->id]) ?></td>
                <td><?= h($offerings->PMASTR) ?></td>
                <td><?= h($offerings->PDOCRS) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
