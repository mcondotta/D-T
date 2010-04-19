<?php

class Autorizados extends AppModel {
	private $nome;
	private $setor;
	private $fone;
	private $email;

	public function __construct() {
		$this->nome = "";
		$this->setor = "";
		$this->fone = array();
		$this->email = new cEmail();
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getSetor() {
		return $this->setor;
	}

	public function setSetor($setor) {
		$this->setor = $setor;
	}

	public function getFone() {
		return $this->fone;
	}

	public function setFone($fone) {
		$this->fone = $fone;
	}

	public function addFone($fone) {
		$index = count($fone)+1;
		$this->fone[$index] = $fone;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}
}
?>