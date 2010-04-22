<?php
/* ReferenciaBancaria Fixture generated on: 2010-04-21 22:04:34 : 1271900914 */
class ReferenciaBancariaFixture extends CakeTestFixture {
	var $name = 'ReferenciaBancaria';

	var $fields = array(
		'referencia_bancaria_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'banco' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'agencia' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'conta_corrente' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'gerente' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'pessoa_fisica_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'referencia_bancaria_id', 'unique' => 1), 'pessoa_fisica_ref_banc' => array('column' => 'pessoa_fisica_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'referencia_bancaria_id' => '4bcfaaf2-97dc-4b81-b9eb-090c6e8a7c74',
			'banco' => 'Lorem ipsum dolor sit amet',
			'agencia' => 'Lorem ipsum dolor sit amet',
			'conta_corrente' => 'Lorem ipsum dolor sit amet',
			'gerente' => 'Lorem ipsum dolor sit amet',
			'pessoa_fisica_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>