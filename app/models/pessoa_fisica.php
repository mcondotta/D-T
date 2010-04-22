<?php
class PessoaFisica extends AppModel {
	var $name = 'PessoaFisica';
	var $useDbConfig = 'development';
	var $primaryKey = 'pessoa_fisica_id';
	var $displayField = 'nome';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Endereco' => array(
			'className' => 'Endereco',
			'foreignKey' => 'pessoa_fisica_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Fone' => array(
			'className' => 'Fone',
			'foreignKey' => 'pessoa_fisica_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ReferenciaBancaria' => array(
			'className' => 'ReferenciaBancaria',
			'foreignKey' => 'pessoa_fisica_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ReferenciaComercial' => array(
			'className' => 'ReferenciaComercial',
			'foreignKey' => 'pessoa_fisica_id',
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