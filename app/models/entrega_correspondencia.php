<?php

class EntregaCorrespondencia extends AppModel {
	private $razao_social;
	private $endereco;
	private $responsavel;

	public function __construct() {
		$this->razao_social = "";
		$this->endereco = new Endereco();
		$this->responsavel = new Responsavel();
	}

	public function getRazaoSocial() {
		return $this->razao_social;
	}

	public function setRazaoSocial($razaoSocial) {
		$this->razao_social = $razaoSocial;
	}

	public function getEndereco() {
		return $this->endereco;
	}

	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	
	public function getResponsavel() {
		return $this->responsavel;
	}

	public function getResponsavel($responsavel) {
		$this->responsavel = $responsavel;
	}
}
?>