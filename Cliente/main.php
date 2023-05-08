<?php

require "cliente.php";

//instanciando o objeto cli1 e cli2, ou seja: criando cli1 e cli2.
$cli1 = new cliente();
$cli2 = new cliente();



$cli1->exibir();

echo "<br>";


 $cli1->set_nome("João Pedro");
 echo "Nome: ".$cli1->get_nome();

 echo"<br>";
 $cli1->set_idade("18 anos");
 echo "Idade: ".$cli1->get_idade();

 echo"<br>";
 $cli1->set_genero("Masculino");
 echo "Gênero: ".$cli1->get_idade();


 echo"<br>";
 $cli1->set_id(01);
 echo "ID: ".$cli1->get_id();


 echo"<br><br><br>";


 
 $cli2->set_nome("Fernanda");
 echo "Nome: ".$cli2->get_nome();

 echo"<br>";
 $cli2->set_idade("20 anos");
 echo "Idade: ".$cli2->get_idade();

 echo"<br>";
 $cli2->set_genero("Feminino");
 echo "Gênero: ".$cli2->get_idade();


 echo"<br>";
 $cli2->set_id(02);
 echo "ID: ".$cli2->get_id();
 
?>