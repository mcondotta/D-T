<?php

class PessoaJuridica extends AbstractPessoa {
	private $razao_social;
	private $nome_fantasia;
	private $cnpj;
	private $inscricao_estadual;
	private $inscricao_municipal;
	private $entrega_servico;
	private $entrega_correspondencia;
	private $socios;
	private $autorizados;

	public function __construct($id = false, $table = null, $ds = null) {
		$this->razao_social = "";
		$this->nome_fantasia = "";
		$this->cnpj = "";
		$this->inscricao_estadual = "";
		$this->inscricao_municipal = "";
		$this->entrega_servico = new EntregaServico();
		$this->entrega_correspondencia = new EntregaCorrespondencia();
		$this->socio = array(); // Socio
		$this->autorizados = array(); // Autorizados
		parent::__construct($id, $table, $ds); // super()
	}

	public function getRazaoSocial() {
		return $this->razao_social;
	}

	public function setRazaoSocial($razaoSocial) {
		$this->razao_social = $razaoSocial;
	}

	public function getNomeFantasia() {
		return $this->nome_fantasia;
	}

	public function setNomeFantasia($nomeFantasia) {
		$this->nome_fantasia = nomeFantasia;
	}

	public function getCnpj() {
		return $this->cnpj;
	}

	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;
	}

	public function getInscEstadual() {
		return $this->inscricao_estadual;
	}

	public function setInscEstadual($inscEstadual) {
		$this->inscricao_estadual = $inscEstadual;
	}

	public function getInscMunicipal() {
		return $this->inscricao_municipal;
	}

	public function setInscMunicipal($inscMunicipal) {
		$this->inscricao_municipal = $inscMunicipal;
	}

	public function getEntregaServico() {
		return $this->entrega_servico;
	}

	public function setEntregaServico($entregaServico) {
		$this->entrega_servico = $entregaServico;
	}

	public function getEntregaCorrespondencia() {
		return $this->entrega_correspondencia;
	}

	public function setEntregaCorrespondencia($entregaCorrespondencia) {
		$this->entrega_correspondencia = $entregaCorrespondencia;
	}
	
	public function getSocio() {
		return $this->socio;
	}

	public function setSocio($socio) {
		$this->socio = $socio;
	}

	public function addSocio($socio) {
		$index = count($socio)+1;
		$this->socio[$index] = $socio;
	}

	public function getAutorizados() {
		return $this->autorizados;
	}

	public function setAutorizados($autorizados) {
		$this->autorizados = $autorizados;
	}

	public function addAutorizados($autorizados) {
		$index = count($autorizados);
		$this->autorizados[$index] = $autorizados;
	}
}

?>