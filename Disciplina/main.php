<?php

require "disciplina.php";


$disciplina1 = new disciplina();



$disciplina1 ->exibir();


echo "Nome: ".$disciplina1->get_nome();
echo"<br>";
echo "Professor: ".$disciplina1->get_professor();
echo"<br>";
echo "Horário: ".$disciplina1->get_horario();
echo"<br>";
echo "ID: ".$disciplina1->get_id();

