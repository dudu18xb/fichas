<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fichasmedica Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $numero
 * @property \Cake\I18n\FrozenDate $data
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Fichasmedica extends Entity
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
        'nome' => true,
        'numero' => true,
        'data' => true,
        'created' => true,
        'modified' => true
    ];
}
