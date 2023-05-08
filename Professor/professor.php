<?php

class professor
{
    //atributos
    public $id;
    public $nome;
    public $salario = 2500;
    public $disciplina;



    function set_nome($nome) //inclui dados
    {
        $this->nome = $nome;
    }

    function get_nome()
    {                       //pega - busca dados
        return ($this->nome);
    }

    function atualizarsalario($taxa)
    {
        $x = ($this->salario * $taxa) / 100;
        $this->salario = $this->salario + $x;

    }

    function exibir(){
        echo "O salário atualizado é de R$:  ".$this->salario. " <br><br> Observação: com base ne valores inicialmente definidos na definição dos atributos - teste - exemplo: salário = R$ 2.500 com 8%.";
    }
}
?>


