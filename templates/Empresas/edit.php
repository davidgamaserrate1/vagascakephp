<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 * @var string[]|\Cake\Collection\CollectionInterface $estabelecimentosEmpresas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Edit Empresa') ?></legend>
                <?php
                    echo $this->Form->control('nome_empresa');
                    echo $this->Form->control('estabelecimentos_empresa_id', ['options' => $estabelecimentosEmpresas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
