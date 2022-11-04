<?php
require_once 'Exercício 029.php';
require_once 'Exercício 031.php';
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function detalhes(){

    }

    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo=$titulo;
        $this->autor=$autor;
        $this->totPaginas=$totPaginas;
        $this->leitor=$leitor;
    }

    function getTitulo(){
        return $this->titulo;
    }

    
    function getAutor(){
        return $this->autor;
    }

    
    function getTotPaginas(){
        return $this->totPaginas;
    }

    
    function getPagAtual(){
        return $this->pagAtual;
    }

    
    function getAberto(){
        return $this->Aberto;
    }

    
    function getLeitor(){
        return $this->leitor;
    }

    function setTitulo ($titulo){
        $this->titulo=$titulo;
    }

    
    function setAutor ($autor){
        $this->autor=$autor;
    }

    
    function setTotPaginas ($totPaginas){
        $this->totPaginas=$totPaginas;
    }

    
    function setPagAtual ($pagAtual){
        $this->pagAtual=$pagAtual;
    }

    
    function setAberto ($aberto){
        $this->aberto=$aberto;
    }

    
    function setLeitor ($leitor){
        $this->leitor=$leitor;
    }

    function abrir(){
        $this->aberto=true;
    }

    function avancarPag(){
        $this->pagAtual ++;
    }

    function fechar(){
        $this->aberto=false;        
    }

    function folhear($p){
        if($p>$this->totPaginas){
            $this->pagAtual=0;
        }else{
            $this->pagAtual=$p;
        }
    }

    function voltarPag(){
        $this->pagAtual --;
    }
}
?>