<?php
App::uses('AppModel', 'Model');
/**
 * Log Model
 *
 * @property CampusItem $CampusItem
 * @property DealType $DealType
 */
class Log extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'amount' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'campus_item_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'deal_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CampusItem' => array(
			'className' => 'CampusItem',
			'foreignKey' => 'campus_item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DealType' => array(
			'className' => 'DealType',
			'foreignKey' => 'deal_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
