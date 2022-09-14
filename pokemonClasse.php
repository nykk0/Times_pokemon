<?php
class pokemon{
    var $nome;
    var $tipo;
    var $lvl;
    var $sexo;
    var $altura;

    function novo_pokemon($nome , $tipo , $lvl , $sexo , $altura)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->lvl= $lvl;
        $this->sexo= $sexo;
        $this->altura= $altura;
    }

    function imprimir_Pokemon()
    {
        
        echo "Nome :  {$this->nome} <br>";
        echo "Tipo : {$this->tipo} <br>";
        echo "Level : {$this->lvl} <br>";
        echo "Sexo : {$this->sexo} <br>";
        echo "Altura : {$this->altura} <br>";
    }
    

}// fim da classe 


?>