<?php

require "professor.php";

//instanciando o objeto carro 1, ou seja: criando carro 1
$professor1 = new professor();


$professor1->set_nome("Felipe");
echo "Nome do professor: ".$professor1->get_nome();

echo"<br><br>";


$professor1->atualizarsalario(8);

$professor1->exibir();

header('Content-Type: text/html; charset=utf-8'); //tratamento de caracteres 
?>