<?php
class ContaBanco{
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Métodos
    public function abrirConta($t){
    $this->setTipo($t);
    $this->setStatus(true);
    if ($t=="CC") {
            $this->setSaldo(50);
        } elseif ($t=="CP") {
            $this->saldo=150;
        }
    }    
    public function fecharConta(){
        if ($this->getSaldo()>0){
            echo"<p>Conta ainda tem dinheiro</p>";
        }else if($this->getSaldo()<0){
            echo "<p>Conta está em débito. Impossível encerrar!</p>";
        }else{
            $this->setStatus(false);
        }        
    }
    public function depositar(){

    }
    public function sacar(){

    }
    public function pagarMensal(){

    }

    //Métodos Especiais

    function construct(){

    }
    function getNumConta(){
        return $this->numConta;
    }
    function getTipo(){
        return $this->tipo;
    }
    function getDono(){
        return $this->dono;
    }
    function getSaldo(){
        return $this->saldo;
    }
    function getStatus(){
        return $this->status;
    }
    function setNumConta($numConta){
        $this->numConta=$numConta;
    }
    function setTipo($tipo){
        $this->tipo=$tipo;
    }
    function setDono($dono){
        $this->dono=$dono;
    }
    function setSaldo($saldo){
        $this->saldo=$saldo;
    }
    function setStatus($status){
        $this->status=$status;
    }
  
}
?>
