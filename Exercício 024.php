<?php
class ControleRemoto{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos Especiais
    function __construct(){
        $this->volume=50;
        $this->ligado=false;
        $this->tocando=false;
    }
    function getVolume(){
        return $this->volume;
    }   
    function getTocando(){
        return $this->tocando;
    }
    function getLigado(){
        return $this->ligado;
    }
    function setVolume($volume){
        $this->volume=$volume;
    }
    
    function setLigado($ligado){
        $this->ligado=$ligado;
    }
    
    function setTocando($tocando){
        $this->tocando=$tocando;
    }
}
?>