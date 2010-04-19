<?php

class Responsavel {
	private $pessoa_responsavel;
	private $setor;
	private $fone;
	private $email;

	public function __construct() {
		$this->pessoa_responsavel = "";
		$this->setor = "";
		$this->fone = new Fone();
		$this->email = new Email();
	}

	public function getPessoalResponsavel() {
		return $this->pessoa_responsavel;
	}

	public function setPessoalResponsavel($pessoaResponsavel) {
		$this->pessoa_responsavel = $pessoaResponsavel;
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
	
	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}
}
?>