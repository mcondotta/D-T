<?php

class Fone {
	private $tipo;
	private $numero;

	public function __construct() {
		$this->tipo = "";
		$this->numero = 0;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($num) {
		$this->numero = $num;
	}
}
?>