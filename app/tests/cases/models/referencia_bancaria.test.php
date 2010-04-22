<?php
/* ReferenciaBancaria Test cases generated on: 2010-04-21 22:04:35 : 1271900915*/
App::import('Model', 'ReferenciaBancaria');

class ReferenciaBancariaTestCase extends CakeTestCase {
	var $fixtures = array('app.referencia_bancaria', 'app.pessoa_fisica', 'app.endereco', 'app.fone', 'app.referencia_comercial');

	function startTest() {
		$this->ReferenciaBancaria =& ClassRegistry::init('ReferenciaBancaria');
	}

	function endTest() {
		unset($this->ReferenciaBancaria);
		ClassRegistry::flush();
	}

}
?>