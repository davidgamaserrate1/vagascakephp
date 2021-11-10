<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstabelecimentosEmpresa $estabelecimentosEmpresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estabelecimentosEmpresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentosEmpresa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estabelecimentos Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estabelecimentosEmpresas form content">
            <?= $this->Form->create($estabelecimentosEmpresa) ?>
            <fieldset>
                <legend><?= __('Edit Estabelecimentos Empresa') ?></legend>
                <?php
                    echo $this->Form->control('empresa_nome');
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('bairro');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
