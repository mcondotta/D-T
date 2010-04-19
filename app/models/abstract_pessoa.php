<?php

abstract class AbstractPessoa extends AppModel {
	private $endereco;
	private $fone;
	private $referencia_bancaria;
	private $referencia_comercial;
	private $email;

	abstract public function __construct($id = false, $table = null, $ds = null) {
		$this->endereco = new Endereco();
		$this->fone = new Fone();
		$this->referencia_bancaria = new ReferenciaBancaria();
		$this->referencia_comercial = new ReferenciaComercial();
		$this->email = new Email();
		parent::__construct($id, $table, $ds);
	}
}
?>