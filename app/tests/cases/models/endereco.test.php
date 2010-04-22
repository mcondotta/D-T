<?php
/* Endereco Test cases generated on: 2010-04-21 22:04:14 : 1271900774*/
App::import('Model', 'Endereco');

class EnderecoTestCase extends CakeTestCase {
	var $fixtures = array('app.endereco', 'app.pessoa_fisica', 'app.fone', 'app.referencia_comercial', 'app.referencia_bancaria');

	function startTest() {
		$this->Endereco =& ClassRegistry::init('Endereco');
	}

	function endTest() {
		unset($this->Endereco);
		ClassRegistry::flush();
	}

}
?>