<?php
/* ReferenciaComercial Test cases generated on: 2010-04-21 22:04:59 : 1271900939*/
App::import('Model', 'ReferenciaComercial');

class ReferenciaComercialTestCase extends CakeTestCase {
	var $fixtures = array('app.referencia_comercial', 'app.pessoa_fisica', 'app.endereco', 'app.fone', 'app.referencia_bancaria');

	function startTest() {
		$this->ReferenciaComercial =& ClassRegistry::init('ReferenciaComercial');
	}

	function endTest() {
		unset($this->ReferenciaComercial);
		ClassRegistry::flush();
	}

}
?>