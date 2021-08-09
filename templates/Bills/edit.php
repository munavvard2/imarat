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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bill->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-90">
            <div class="bills form content">
                <?= $this->Form->create($bill) ?>
                <fieldset>
                    <legend><?= __('New Bill') ?></legend>
                    <div class="row">
                        <div class="column"><?= $this->Form->control('cust_name') ?></div>
                        <div class="column"><?= $this->Form->control('site'); ?></div>
                        <div class="column"><?= $this->Form->control('mukam'); ?></div>
                    </div>
                    <div class="row">
                        <div class="column"><?= $this->Form->control('from_date', ['type'=>'text','class'=>'datepicker','value'=>$bill->from_date->format('d/m/Y')]); ?></div>
                        <div class="column"><?= $this->Form->control('to_date', ['type'=>'text','class'=>'datepicker','value'=>$bill->to_date->format('d/m/Y')]); ?></div>
                        <div class="column"><?= $this->Form->control('days',['class'=>'text-right']); ?></div>
                        <div class="column"><?= $this->Form->control('brass_price',['class'=>'text-right','label'=>'Brass ₹']); ?></div>
                        <div class="column"><?= $this->Form->control('extra_plate_price',['class'=>'text-right','label'=>'Plate ₹']); ?></div>
                        <div class="column"><?= $this->Form->control('extra_aadi_price',['class'=>'text-right','label'=>'Aadi/Teka ₹']); ?></div>
                        <?= $this->Form->control('extra_teka_price',['type'=>'hidden']); ?>
                        <?php $this->Form->unlockField('extra_teka_price'); ?>
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
                                    <td>Majuri</td>
                                    <td><span class="">&nbsp;</span></td>
                                    <td><span class="majuriAmt">&nbsp;</span>
                                        <?= $this->Form->control('majuri',['type'=>'hidden','class'=>'majuriAmt']) ?>
                                        <?php $this->Form->unlockField('majuri'); ?>
                                    </td>
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
                </fieldset>
                <div class="row">
                    <div class="column">
                        <?= $this->Form->button(__('Save Bill'),['class'=>'button-block']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
</div>

<script>
    let priceConfig = {
        brass: () => {
            // return 33.33;
            return parseFloat($('#brass-price').val()) / 15;
        },
        plate: () => {
            return parseFloat($('#extra-plate-price').val()) / 15;
        },
        aadi: () => {
            return parseFloat($('#extra-aadi-price').val()) / 15;
        },
        teka: () => {
            return parseFloat($('#extra-teka-price').val()) / 15;
        },
    };
</script>
<?php echo $this->Html->script('brass_calculation'); ?>
