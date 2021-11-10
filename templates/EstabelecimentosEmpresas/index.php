<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstabelecimentosEmpresa[]|\Cake\Collection\CollectionInterface $estabelecimentosEmpresas
 */
?>
<div class="estabelecimentosEmpresas index content">
    <?= $this->Html->link(__('New Estabelecimentos Empresa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estabelecimentos Empresas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estabelecimentosEmpresas as $estabelecimentosEmpresa): ?>
                <tr>
                    <td><?= $this->Number->format($estabelecimentosEmpresa->id) ?></td>
                    <td><?= $this->Number->format($estabelecimentosEmpresa->numero) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estabelecimentosEmpresa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estabelecimentosEmpresa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estabelecimentosEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentosEmpresa->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Exibindo {{current}} registros(s) de {{count}}')) ?></p>
    </div>
</div>
