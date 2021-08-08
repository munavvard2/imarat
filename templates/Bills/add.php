<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill $bill
 */
echo $this->Html->script('brass_calculation');
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-90">
        <div class="bills form content">
            <?= $this->Form->create($bill) ?>
                <legend><?= __('New Bill') ?></legend>
                <div class="row">
                    <div class="column"><?= $this->Form->control('cust_name') ?></div>
                    <div class="column"><?= $this->Form->control('site'); ?></div>
                    <div class="column"><?= $this->Form->control('mukam'); ?></div>
                </div>
                <div class="row">
                    <div class="column"><?= $this->Form->control('from_date', ['type'=>'text','class'=>'datepicker','value'=>date('d/m/Y')]); ?></div>
                    <div class="column"><?= $this->Form->control('to_date', ['type'=>'text','class'=>'datepicker','value'=>date('d/m/Y',strtotime('+15 days'))]); ?></div>
                    <div class="column"><?= $this->Form->control('days',['class'=>'text-right','value'=>'15']); ?></div>
                </div>
                <div class="row">
                    <div class="column-10">
                        <label>Plates</label>
                    </div>
                    <div class="column"><?= $this->Form->control('p_3_2',['class'=>'text-right','label'=>'3x2']); ?></div>
                    <div class="column"><?= $this->Form->control('p_3_1_ll',['class'=>'text-right','label'=>'3x1ll']); ?></div>
                    <div class="column"><?= $this->Form->control('p_3_1_l',['class'=>'text-right','label'=>'3x1l']); ?></div>
                    <div class="column"><?= $this->Form->control('p_3_1',['class'=>'text-right','label'=>'3x1']); ?></div>
                </div>
                <div class="row">
                    <div class="column column-33">
                        <?= $this->Form->control('teka',['class'=>'text-right']) ?>
                    </div>
                    <div class="column column-33">
                        <?= $this->Form->control('aadi',['class'=>'text-right']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="column-responsive column-66">
                        <table class="text-right-table">
                            <tr>
                                <td><b>Total Brass</b></td>
                                <td><span class="regularBrass">&nbsp;</span></td>
                                <td><span class="regularBrassAmt">&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td>Extra Plate Brass</td>
                                <td><span class="extraPlateBrass">&nbsp;</span></td>
                                <td><span class="extraPlateBrassAmt">&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td>Extra Aadi Brass</td>
                                <td><span class="extraAadiBrass">&nbsp;</span></td>
                                <td><span class="extraAadiBrassAmt">&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td>Extra Teka Brass</td>
                                <td><span class="extraTekaBrass">&nbsp;</span></td>
                                <td><span class="extraTekaBrassAmt">&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td><b>Grand Total</b></td>
                                <td><span class="">&nbsp;</span></td>
                                <td><span class="gTotalAmt">&nbsp;</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="column-responsive column-33">
                        <?= $this->Form->control('total',['class'=>'text-right']) ?>
                    </div>
                </div>
                <?= $this->Form->control('created_by',['type'=>'hidden','value'=>$this->Identity->get('id')]) ?>
            <div class="row">
                <div class="column">
                    <?= $this->Form->button(__('Save Bill'),['class'=>'button-block']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
