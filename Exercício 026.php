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
        $this->setPeso($pe);
        $this->vitorias=$vi;
        $this->derrotas=$de;
        $this->empates=$em;
    }

    function apresentar(){
        echo"<p>--------------------------</p>";
        echo"<p>Chegou a hora! O lutador: </p>" . $this->getNome();
        echo"veio diretamente de " . $this->getNacionalidade();
        echo" tem " . $this->getIdade() . "anos e pesa " + $this->getPeso() . "KG";
        echo"<br>Ele tem " . $this->getVitorias() . "Vitórias";
        echo $this->getDerrotas() . "derrotas e " . $this->getEmpates() . "Empates";
    }
    
    function Status(){
        echo"<p>--------------------------</p>";
        echo"<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo" tem " . $this->getVitorias() . " Vitórias ";
        echo $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates";
    }
    
    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
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

    function getIdade(){
        return $this->idade;
    }

    function setIdade($idade){
        $this->idade=$idade;
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

    function getCategoria(){
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->peso<52.2){
            $this->categoria="Inválido";
        }elseif($this->peso<=70.3){
            $this->categoria="Leve";
        }elseif($this->peso<=83.9){
            $this->categoria="Médio";
        }elseif($this->peso<=120.2){
            $this->categoria="Pesado";
        }else{
            $this->categoria="Inválido";
        }
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