<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $program->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $program->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Offerings'), ['controller' => 'Offerings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Offering'), ['controller' => 'Offerings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programs form large-9 medium-8 columns content">
    <?= $this->Form->create($program) ?>
    <fieldset>
        <legend><?= __('Edit Program') ?></legend>
        <?php
            echo $this->Form->input('family');
            echo $this->Form->input('code');
            echo $this->Form->input('title');
            echo $this->Form->input('definition');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
