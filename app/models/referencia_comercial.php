<?php
class ReferenciaComercial extends AppModel {
	var $name = 'ReferenciaComercial';
	var $useDbConfig = 'development';
	var $primaryKey = 'referencia_comercial_id';
	var $displayField = 'empresa';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'PessoaFisica' => array(
			'className' => 'PessoaFisica',
			'foreignKey' => 'pessoa_fisica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Fone' => array(
			'className' => 'Fone',
			'foreignKey' => 'referencia_comercial_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>