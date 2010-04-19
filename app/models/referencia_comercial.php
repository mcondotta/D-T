<?php

class ReferenciaComercial {
	private $empresa;
	private $telefone;
	private $contato;

	public function __construct() {
		$this->empresa = "";
		$this->telefone = 0;
		$this->contato = "";
	}

	public function getEmpresa() {
		return $this->empresa;
	}

	public function setEmpresa($empresa) {
		$this->empresa = $empresa;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($fone) {
		$this->telefone = $fone;
	}

	public function getContato() {
		return $this->contato;
	}

	public function setContato($contato) {
		$this->contato = $contato;
	}
}
?>