<?php
class ReferenciaBancaria extends AppModel {
	var $name = 'ReferenciaBancaria';
	var $useDbConfig = 'development';
	var $primaryKey = 'referencia_bancaria_id';
	var $displayField = 'banco';
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
}
?>