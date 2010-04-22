<?php
/* ReferenciaComercial Fixture generated on: 2010-04-21 22:04:59 : 1271900939 */
class ReferenciaComercialFixture extends CakeTestFixture {
	var $name = 'ReferenciaComercial';

	var $fields = array(
		'referencia_comercial_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'empresa' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'contato' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'pessoa_fisica_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'referencia_comercial_id', 'unique' => 1), 'pessoa_fisica_ref_com' => array('column' => 'pessoa_fisica_id', 'unique' => 0), 'ref_com_fone' => array('column' => 'referencia_comercial_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'referencia_comercial_id' => '4bcfab0a-d3a0-4a55-b532-090c6e8a7c74',
			'empresa' => 'Lorem ipsum dolor sit amet',
			'contato' => 'Lorem ipsum dolor sit amet',
			'pessoa_fisica_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>