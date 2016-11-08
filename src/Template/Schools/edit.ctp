<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $school->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Favorites'), ['controller' => 'Favorites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Favorite'), ['controller' => 'Favorites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schools form large-9 medium-8 columns content">
    <?= $this->Form->create($school) ?>
    <fieldset>
        <legend><?= __('Edit School') ?></legend>
        <?php
            echo $this->Form->input('INSTNM');
            echo $this->Form->input('CITY');
            echo $this->Form->input('STABBR');
            echo $this->Form->input('ZIP');
            echo $this->Form->input('OBEREG');
            echo $this->Form->input('WEBADDR');
            echo $this->Form->input('HLOFFER');
            echo $this->Form->input('LOCALE');
            echo $this->Form->input('INSTCAT');
            echo $this->Form->input('INSTSIZE');
            echo $this->Form->input('APPLFEEG');
            echo $this->Form->input('TUITION6');
            echo $this->Form->input('TUITION7');
            echo $this->Form->input('APPLCN');
            echo $this->Form->input('ADMSSN');
            echo $this->Form->input('ENRLT');
            echo $this->Form->input('SATMT25');
            echo $this->Form->input('SATMT75');
            echo $this->Form->input('SATWR25');
            echo $this->Form->input('SATWR75');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
