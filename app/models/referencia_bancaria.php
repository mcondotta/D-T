<?php

class ReferenciaBancaria {
	private $banco;
	private $agencia;
	private $conta_corrente;
	private $gerente;

	public function __construct() {
		$this->banco = "";
		$this->agencia = "";
		$this->conta_corrente = "";
		$this->gerente = "";
	}

	public function getBanco() {
		return $this->banco;
	}

	public function setBanco($banco) {
		$this->banco = $banco;
	}

	public function getAgencia() {
		return $this->agencia;
	}

	public function setAgencia($agencia) {
		$this->agencia = $agencia;
	}

	public function getContaCorrente() {
		return $this->conta_corrente;
	}

	public function setContaCorrente($cc) {
		$this->conta_corrente = $cc;
	}

	public function getGerente() {
		return $this->gerente;
	}

	public function setGerente($gerente) {
		$this->gerente = $gererente;
	}
}
?>