<?php

require "produto.php";

//instanciando o objeto carro 1, ou seja: criando carro 1
$produto1 = new produto();



$produto1->atualizarValor(20);

$produto1->exibir();

?>