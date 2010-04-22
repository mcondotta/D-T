<?php
/* PessoaFisica Test cases generated on: 2010-04-21 22:04:10 : 1271900890*/
App::import('Model', 'PessoaFisica');

class PessoaFisicaTestCase extends CakeTestCase {
	var $fixtures = array('app.pessoa_fisica', 'app.endereco', 'app.fone', 'app.referencia_comercial', 'app.referencia_bancaria');

	function startTest() {
		$this->PessoaFisica =& ClassRegistry::init('PessoaFisica');
	}

	function endTest() {
		unset($this->PessoaFisica);
		ClassRegistry::flush();
	}

}
?>