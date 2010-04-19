<?php

class Email extends AppModel {
	private $email;
	private $site;

	public function __construct() {
		$this->email = "";
		$this->site = "";
	}

	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}

	public function getSite() {
		return $this->site;
	}

	public function setSite($site) {
		$this->site = $site;
	}
}
?>