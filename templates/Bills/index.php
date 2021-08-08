<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill[]|\Cake\Collection\CollectionInterface $bills
 */
?>
<div class="bills index content">
    <?= $this->Html->link(__('New Bill'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bills') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id','Bill Number') ?></th>
                    <th><?= $this->Paginator->sort('cust_name','Name') ?></th>
<!--                    <th>--><?//= $this->Paginator->sort('site') ?><!--</th>-->
<!--                    <th>--><?//= $this->Paginator->sort('mukam') ?><!--</th>-->
                    <th><?= $this->Paginator->sort('from_date') ?></th>
                    <th><?= $this->Paginator->sort('to_date') ?></th>
                    <th><?= $this->Paginator->sort('days') ?></th>
                    <th><?= $this->Paginator->sort('p_3_2',"Plate") ?></th>
<!--                    <th>--><?//= $this->Paginator->sort('p_3_2') ?><!--</th>-->
<!--                    <th>--><?//= $this->Paginator->sort('p_3_1_ll') ?><!--</th>-->
<!--                    <th>--><?//= $this->Paginator->sort('p_3_1_l') ?><!--</th>-->
<!--                    <th>--><?//= $this->Paginator->sort('p_3_1') ?><!--</th>-->
                    <th><?= $this->Paginator->sort('teka') ?></th>
                    <th><?= $this->Paginator->sort('aadi') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
<!--                    <th>--><?//= $this->Paginator->sort('created_by') ?><!--</th>-->
                    <th><?= $this->Paginator->sort('created','Bill Date') ?></th>
<!--                    <th>--><?//= $this->Paginator->sort('modified') ?><!--</th>-->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bills as $bill): ?>
                <tr>
                    <td><?= $this->Number->format($bill->id) ?></td>
                    <td><?= h($bill->cust_name) ?></td>
<!--                    <td>--><?//= h($bill->site) ?><!--</td>-->
<!--                    <td>--><?//= h($bill->mukam) ?><!--</td>-->
                    <td><?= h($bill->from_date) ?></td>
                    <td><?= h($bill->to_date) ?></td>
                    <td><?= $this->Number->format($bill->days) ?></td>
                    <td><?= $this->Number->format($bill->p_3_2 + $bill->p_3_1_ll + $bill->p_3_1_l + $bill->p_3_1) ?></td>
<!--                    <td>--><?//= $this->Number->format($bill->p_3_1_ll) ?><!--</td>-->
<!--                    <td>--><?//= $this->Number->format($bill->p_3_1_l) ?><!--</td>-->
<!--                    <td>--><?//= $this->Number->format($bill->p_3_1) ?><!--</td>-->
                    <td><?= $this->Number->format($bill->teka) ?></td>
                    <td><?= $this->Number->format($bill->aadi) ?></td>
                    <td><?= $this->Number->format($bill->total) ?></td>
<!--                    <td>--><?//= $this->Number->format($bill->created_by) ?><!--</td>-->
                    <td><?= h($bill->created->format('d/m/Y')) ?></td>
<!--                    <td>--><?//= h($bill->modified) ?><!--</td>-->
                    <td class="actions">
<!--                        --><?//= $this->Html->link(__('View'), ['action' => 'view', $bill->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bill->id]) ?>
                        <?= $this->Html->link(__('Print'), ['action' => 'print', $bill->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
