<?php
/* Endereco Fixture generated on: 2010-04-21 22:04:14 : 1271900774 */
class EnderecoFixture extends CakeTestFixture {
	var $name = 'Endereco';

	var $fields = array(
		'endereco_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'endereco' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'numero' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'complemento' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'bairro' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'cep' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 8),
		'cidade' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'estado' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'pessoa_fisica_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'endereco_id', 'unique' => 1), 'pessoa_fisica_endereco' => array('column' => 'pessoa_fisica_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'endereco_id' => '4bcfaa66-e164-484a-ae8a-090c6e8a7c74',
			'endereco' => 'Lorem ipsum dolor sit amet',
			'numero' => 1,
			'complemento' => 'Lorem ipsum dolor ',
			'bairro' => 'Lorem ipsum dolor sit amet',
			'cep' => 'Lorem ',
			'cidade' => 'Lorem ipsum dolor sit amet',
			'estado' => 'Lorem ipsum dolor sit amet',
			'pessoa_fisica_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>