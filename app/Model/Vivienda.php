<?php
App::uses('AppModel', 'Model');
/**
 * Vivienda Model
 *
 * @property Calle $Calle
 */
class Vivienda extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'vivienda';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipo' => array(
			'list' => array(
				'rule' => array('inList', array('Casa', 'Edificio')),
				'message' => 'Tipo no valido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Calle' => array(
			'className' => 'Calle',
			'foreignKey' => 'calle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $actsAs = array('Utils.Lookupable' => array('types' => array('Calle')));
}
