<?php
/* Fone Test cases generated on: 2010-04-21 22:04:36 : 1271900796*/
App::import('Model', 'Fone');

class FoneTestCase extends CakeTestCase {
	var $fixtures = array('app.fone', 'app.pessoa_fisica', 'app.endereco', 'app.referencia_bancaria', 'app.referencia_comercial');

	function startTest() {
		$this->Fone =& ClassRegistry::init('Fone');
	}

	function endTest() {
		unset($this->Fone);
		ClassRegistry::flush();
	}

}
?>