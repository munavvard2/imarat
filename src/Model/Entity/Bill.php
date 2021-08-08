<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bill Entity
 *
 * @property int $id
 * @property string $cust_name
 * @property string|null $site
 * @property string|null $mukam
 * @property \Cake\I18n\FrozenDate|null $from_date
 * @property \Cake\I18n\FrozenDate|null $to_date
 * @property int|null $days
 * @property int|null $p_3_2
 * @property int|null $p_3_1_ll
 * @property int|null $p_3_1_l
 * @property int|null $p_3_1
 * @property int|null $teka
 * @property int|null $aadi
 * @property string|null $total
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Bill extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cust_name' => true,
        'site' => true,
        'mukam' => true,
        'from_date' => true,
        'to_date' => true,
        'days' => true,
        'p_3_2' => true,
        'p_3_1_ll' => true,
        'p_3_1_l' => true,
        'p_3_1' => true,
        'teka' => true,
        'aadi' => true,
        'total' => true,
        'created_by' => true,
        'created' => true,
        'modified' => true,
    ];
}
