<?php
/* PessoaFisica Fixture generated on: 2010-04-21 22:04:10 : 1271900890 */
class PessoaFisicaFixture extends CakeTestFixture {
	var $name = 'PessoaFisica';

	var $fields = array(
		'pessoa_fisica_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'cpf' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'rg' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'orgao' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'data_nascimento' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'profissao' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100),
		'contato' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'pessoa_fisica_id', 'unique' => 1), 'endereco' => array('column' => 'pessoa_fisica_id', 'unique' => 0), 'fone' => array('column' => 'pessoa_fisica_id', 'unique' => 0), 'referencia_bancaria' => array('column' => 'pessoa_fisica_id', 'unique' => 0), 'referencia_comercial' => array('column' => 'pessoa_fisica_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'pessoa_fisica_id' => '4bcfaad9-7678-4fa5-9b2a-090c6e8a7c74',
			'nome' => 'Lorem ipsum dolor sit amet',
			'cpf' => 'Lorem ipsum dolor ',
			'rg' => 'Lorem ipsum dolor ',
			'orgao' => 'Lorem ip',
			'data_nascimento' => '2010-04-21',
			'profissao' => 'Lorem ipsum dolor sit amet',
			'contato' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>