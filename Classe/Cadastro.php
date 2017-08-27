<?php

class Cadastro {
	private $nome;
	private $email;
	private $senha;

	public function getName(): string {
		return $this->nome;
	}

	public function getEmail(): string {
		return $this->email;
	}

	public function getSenha(): string {
		return $this->senha;
	}

	public function setName($nome) {

		$this->nome = $nome;

	}

	public function setEmail($email) {

		$this->email = $email;

	}

	public function setSenha($senha) {

		$this->senha = $senha;

	}

	public function __toString() {
		return json_encode(array(

			"Nome" => $this->getName(),
			"Email" => $this->getEmail(),
			"Senha" => $this->getSenha(),

		));
	}
}

?>