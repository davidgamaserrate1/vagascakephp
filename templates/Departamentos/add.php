<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 * @var \Cake\Collection\CollectionInterface|string[] $empresas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Departamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departamentos form content">
            <?= $this->Form->create($departamento) ?>
            <fieldset>
                <legend><?= __('Add Departamento') ?></legend>
                <?php
                    echo $this->Form->control('nome_departamento');
                    echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
