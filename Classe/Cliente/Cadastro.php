<?php

namespace Cliente;

class Cadastro extends \Cadastro {
	public function rVenda() {
		echo "Foi registrado uma venda para " . $this->getName();
	}
}

?>