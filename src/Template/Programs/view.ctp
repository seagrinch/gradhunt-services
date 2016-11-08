<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Program'), ['action' => 'edit', $program->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Program'), ['action' => 'delete', $program->id], ['confirm' => __('Are you sure you want to delete # {0}?', $program->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Programs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
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
        <h4><?= __('Related Offerings') ?></h4>
        <?php if (!empty($program->offerings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Program Id') ?></th>
                <th scope="col"><?= __('PMASTR') ?></th>
                <th scope="col"><?= __('PDOCRS') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($program->offerings as $offerings): ?>
            <tr>
                <td><?= h($offerings->id) ?></td>
                <td><?= h($offerings->school_id) ?></td>
                <td><?= h($offerings->program_id) ?></td>
                <td><?= h($offerings->PMASTR) ?></td>
                <td><?= h($offerings->PDOCRS) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Offerings', 'action' => 'view', $offerings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Offerings', 'action' => 'edit', $offerings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offerings', 'action' => 'delete', $offerings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offerings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
