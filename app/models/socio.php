<?php

class Socio {
	private $nome;
	private $cpf;

	public function __construct() {
		$this->nome = "";
		$this->cpf = 0;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}
}
?>