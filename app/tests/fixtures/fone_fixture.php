<?php
/* Fone Fixture generated on: 2010-04-21 22:04:35 : 1271900795 */
class FoneFixture extends CakeTestFixture {
	var $name = 'Fone';

	var $fields = array(
		'fone_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'numero' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30),
		'tipo' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'pessoa_fisica_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'referencia_comercial_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'fone_id', 'unique' => 1), 'pessoa_fisica_fone' => array('column' => 'pessoa_fisica_id', 'unique' => 0), 'referencia_comercial_fone' => array('column' => 'referencia_comercial_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'fone_id' => '4bcfaa7b-1004-41b2-81e9-090c6e8a7c74',
			'numero' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit amet',
			'pessoa_fisica_id' => 'Lorem ipsum dolor sit amet',
			'referencia_comercial_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>