<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Favorites'), ['controller' => 'Favorites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Favorite'), ['controller' => 'Favorites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schools view large-9 medium-8 columns content">
    <h3><?= h($school->id) ?></h3>
    <table class="vertical-table">
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
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($school->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Favorites') ?></h4>
        <?php if (!empty($school->favorites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->favorites as $favorites): ?>
            <tr>
                <td><?= h($favorites->id) ?></td>
                <td><?= h($favorites->school_id) ?></td>
                <td><?= h($favorites->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Favorites', 'action' => 'view', $favorites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Favorites', 'action' => 'edit', $favorites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Favorites', 'action' => 'delete', $favorites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $favorites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Offerings') ?></h4>
        <?php if (!empty($school->offerings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('School Id') ?></th>
                <th scope="col"><?= __('Program Id') ?></th>
                <th scope="col"><?= __('PMASTR') ?></th>
                <th scope="col"><?= __('PDOCRS') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($school->offerings as $offerings): ?>
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
