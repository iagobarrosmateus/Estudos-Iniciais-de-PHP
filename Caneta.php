<?php
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if ($this ->tampada == true){
            echo " Erro!";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }        
    }

    function tampar(){
        $this ->tamapada = true;
    }

    function destampar(){
        $this->tampada = false;
    }
}
?>