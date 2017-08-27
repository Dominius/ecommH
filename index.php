<?php

require_once "config.php";

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setName("John Doe");
$cad->setEmail("JohnDoe@email.com");
$cad->setSenha("123456");

$cad->rVenda();

//echo $cad;

?>