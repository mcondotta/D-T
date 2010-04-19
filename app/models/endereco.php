<?php

class Endereco {
	private $endereco;
	private $numero;
	private $complemento;
	private $bairro;
	private $cep;
	private $cidade;
	private $estado;

	public function __construct() {
		$this->endereco = "";
		$this->numero = 0;
		$this->complemento = 0;
		$this->bairro = "";
		$this->cep = 0;
		$this->cidade = "";
		$this->estado = "";
	}

	public function getEndereco() {
		return $this->endereco;
	}

	public function setEndereco($end) {
		$this->endereco = $end;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($num) {
		$this->numero = $num;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function getCep() {
		return $this->cep;
	}

	public function setCep($cep) {
		$this->cep = $cep;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function setEstado($estado) {
		$this->estado = $estado;
	}
}
?>