<?php

class PessoaFisica extends AbstractPessoa {
	private $nome;
	private $cpf;
	private $rg;
	private $orgao;
	private $data_nascimento;
	private $profissao;
	private $contato;

	public function __construct($id = false, $table = null, $ds = null) {
		$this->pessoa = "";
		$this->cpf = "";
		$this->rg = "";
		$this->orgao = "";
		$this->data_nascimento = "";
		$this->profissao = "";
		$this->contato = "";
		parent::__construct($id, $table, $ds); // super()
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

	public function getRg() {
		return $this->rg;
	}

	public function setRg($rg) {
		$this->rg = $rg;
	}

	public function getOrgao() {
		return $this->orgao;
	}

	public function setOrgao($orgao) {
		$this->orgao = $orgao;
	}

	public function getDataNascimento() {
		return $this->data_nascimento;
	}

	public function setDataNascimento($dataNascimento) {
		$this->data_nascimento = $dataNascimento;
	}

	public function getProfissao() {
		return $this->profissao;
	}

	public function setProfissao($profissao) {
		$this->profissao = $profissao;
	}

	public function getContato() {
		return $this->contato;
	}

	public function setContato($contato) {
		$this->contato = $contato;
	}
}
?>