<?php
class Fone extends AppModel {
	var $name = 'Fone';
	var $useDbConfig = 'development';
	var $primaryKey = 'fone_id';
	var $displayField = 'numero';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'PessoaFisica' => array(
			'className' => 'PessoaFisica',
			'foreignKey' => 'pessoa_fisica_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ReferenciaComercial' => array(
			'className' => 'ReferenciaComercial',
			'foreignKey' => 'referencia_comercial_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>