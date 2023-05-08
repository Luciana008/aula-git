
<?php

class produto
{


    //atributos
    public $nome;
    public $marca;
    public $descricao;
    private $valor = 400;

    //construtores
    function _construct($valor)
    { //variavel da função

        $this->valor = $valor; //variavel da class

    }

    function atualizarValor($taxa)
    {
        $x = ($this->valor * $taxa) / 100;
        $this->valor = $this->valor + $x;

    }


    function exibir(){
        echo "O valor atualizado é de R$:  ".$this->valor. " <br><br> Observação: com base ne valores inicialmente definidos na definição dos atributos - teste - exemplo: valor = R$ 400 com 20%.";
    }
}

header('Content-Type: text/html; charset=utf-8'); //tratamento de caracteres no php
?>