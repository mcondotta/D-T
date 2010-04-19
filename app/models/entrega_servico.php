<?php

class EntregaServico {
	private $endereco;
	private $responsavel;
	
	public function __construct() {
		$this->endereco = new Endereco();
		$this->responsavel = array(); // cResponsavel()
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

	public function setResponsavel($responsavel) {
		$this->responsavel = $responsavel;
	}

	public function addResponsavel($responsavel) {
		$index = count($this->responsavel)+1;
		$this->responsavel[$index] = $responsavel;
	}
}
?>