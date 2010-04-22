<?php
class Endereco extends AppModel {
	var $name = 'Endereco';
	var $useDbConfig = 'development';
	var $primaryKey = 'endereco_id';
	var $displayField = 'endereco';
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