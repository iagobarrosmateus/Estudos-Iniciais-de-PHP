<?php
class Lutador{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria,$vitorias, $derrotas, $empates;

    function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->nome=$no;
        $this->nacionalidade=$na;
        $this->idade=$id;
        $this->altura=$al;
        $this->peso=$pe;
        $this->vitorias=$vi;
        $this->derrotas=$de;
        $this->empates=$em;
    }

    function apresentar(){

    }
    
    function Status(){

    }
    
    function ganharLuta(){

    }
    
    function perderLuta(){

    }
    
    function empatarLuta(){

    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome=$nome;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade=$nacionalidade;
    }

    function getAltura(){
        return $this->altura;
    }

    function setAltura($altura){
        $this->altura=$altura;
    }

    function getPeso(){
        return $this->peso;
    }

    function setPeso($peso){
        $this->peso=$peso;
        $this->setCategoria();
    }

    private function setCategoria(){
        $this->categoria=$categoria;
    }

    function getVitorias(){
        return $this->vitorias;
    }

    function setVitorias($vitorias){
        $this->vitorias=$vitorias;
    }

    function getDerrotas(){
        return $this->derrotas;
    }

    function setDerrotas($derrotas){
        $this->derrotas=$derrotas;
    }

    function getEmpates(){
        return $this->empates;
    }

    function setEmpates($empates){
        $this->empates=$empates;
    }
}
?>