<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('List of Programs'), ['controller'=>'programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List of Schools'), ['controller'=>'schools', 'action' => 'index']) ?> </li>
        <hr>
        <li><?= $this->Html->link(__('This School as JSON'), ['action' => 'view', $school->id, '_ext'=>'json']) ?> </li>
    </ul>
</nav>
<div class="schools view large-9 medium-8 columns content">
    <h3><?= h($school->INSTNM) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($school->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('INSTNM') ?></th>
            <td><?= h($school->INSTNM) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CITY') ?></th>
            <td><?= h($school->CITY) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('STABBR') ?></th>
            <td><?= h($school->STABBR) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ZIP') ?></th>
            <td><?= h($school->ZIP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OBEREG') ?></th>
            <td><?= h($school->OBEREG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('WEBADDR') ?></th>
            <td><?= h($school->WEBADDR) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HLOFFER') ?></th>
            <td><?= h($school->HLOFFER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LOCALE') ?></th>
            <td><?= h($school->LOCALE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('INSTCAT') ?></th>
            <td><?= h($school->INSTCAT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('INSTSIZE') ?></th>
            <td><?= h($school->INSTSIZE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('APPLFEEG') ?></th>
            <td><?= h($school->APPLFEEG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TUITION6') ?></th>
            <td><?= h($school->TUITION6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TUITION7') ?></th>
            <td><?= h($school->TUITION7) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('APPLCN') ?></th>
            <td><?= h($school->APPLCN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADMSSN') ?></th>
            <td><?= h($school->ADMSSN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ENRLT') ?></th>
            <td><?= h($school->ENRLT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SATMT25') ?></th>
            <td><?= h($school->SATMT25) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SATMT75') ?></th>
            <td><?= h($school->SATMT75) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SATWR25') ?></th>
            <td><?= h($school->SATWR25) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SATWR75') ?></th>
            <td><?= h($school->SATWR75) ?></td>
        </tr>
    </table>

    <div class="related">
        <h4><?= __('Program Offerings') ?></h4>
        <?php if (!empty($school->offerings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Program Id') ?></th>
                <th><?= __('Program Code') ?></th>
                <th><?= __('Program Title') ?></th>
                <th><?= __('PMASTR') ?></th>
                <th><?= __('PDOCRS') ?></th>
            </tr>
            <?php foreach ($school->offerings as $offerings): ?>
            <tr>
                <td><?= h($offerings->program->id) ?></td>
                <td><?= h($offerings->program->code) ?></td>
                <td><?= $this->Html->link($offerings->program->title,['controller'=>'programs','action'=>'view',$offerings->program_id]) ?></td>
                <td><?= h($offerings->PMASTR) ?></td>
                <td><?= h($offerings->PDOCRS) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
