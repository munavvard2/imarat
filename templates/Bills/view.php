<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill $bill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bill'), ['action' => 'edit', $bill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bill'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bills view content">
            <h3><?= h($bill->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cust Name') ?></th>
                    <td><?= h($bill->cust_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site') ?></th>
                    <td><?= h($bill->site) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mukam') ?></th>
                    <td><?= h($bill->mukam) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bill->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Days') ?></th>
                    <td><?= $this->Number->format($bill->days) ?></td>
                </tr>
                <tr>
                    <th><?= __('P 3 2') ?></th>
                    <td><?= $this->Number->format($bill->p_3_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('P 3 1 Ll') ?></th>
                    <td><?= $this->Number->format($bill->p_3_1_ll) ?></td>
                </tr>
                <tr>
                    <th><?= __('P 3 1 L') ?></th>
                    <td><?= $this->Number->format($bill->p_3_1_l) ?></td>
                </tr>
                <tr>
                    <th><?= __('P 3 1') ?></th>
                    <td><?= $this->Number->format($bill->p_3_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Teka') ?></th>
                    <td><?= $this->Number->format($bill->teka) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aadi') ?></th>
                    <td><?= $this->Number->format($bill->aadi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($bill->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= $this->Number->format($bill->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('From Date') ?></th>
                    <td><?= h($bill->from_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('To Date') ?></th>
                    <td><?= h($bill->to_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bill->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bill->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
