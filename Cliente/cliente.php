
<?php

class cliente
{


    //atributos
    public $nome;
    public $idade;
    public $genero;
    private $id;


    //metodos
    function exibir()
    {
        echo "Dados de identificação dos clientes: ";
        echo "<br><br>";
    }


    function set_nome($nome) //inclui dados
    {
        $this->nome = $nome;
    }

    function get_nome()
    { //pega - busca dados
        return ($this->nome);
    }


    function set_idade($idade)
    {
        $this->idade = $idade;
    }
    function get_idade()
    {
        return ($this->idade);
    }


    
    function set_genero($genero)
    {
        $this->idade = $genero;
    }
    function get_genero()
    {
        return ($this->genero);
    }


    function set_id($id)
    {
        $this->id = $id;
    }
    function get_id()
    {
        return ($this->id);
    }


}

header('Content-Type: text/html; charset=utf-8'); //tratamento de caracteres
?>