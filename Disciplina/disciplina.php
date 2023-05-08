<?php

class disciplina
{


    //atributos
    public $nome = "Geografia";
    public $professor = "Pedro";
    public $horario = "18h";
    private $id = 16;

    function exibir()
    {
        echo "Informações da disciplina: ";
        echo "<br><br>";
    }

    function get_nome()
    { //pega - busca dados
        return ($this->nome);
    }

    function get_professor()
    { //pega - busca dados
        return ($this->professor);
    }

    function get_horario()
    { //pega - busca dados
        return ($this->horario);
    }

    function get_id()
    { //pega - busca dados
        return ($this->id);
    }

    
}

header('Content-Type: text/html; charset=utf-8'); //tratamento de caracteres
?>