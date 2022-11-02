<?php
class Pessoa{
    Private $nome;
    private $idade;
    private $sexo;

    function fazerAniver(){
        $this->idade ++;
    }

    function __construct($nome, $idade, $sexo){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->sexo=$sexo;
    }
}
?>