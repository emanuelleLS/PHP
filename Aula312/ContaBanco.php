<?php


/**
 * Description of ContaBanco
 *
 * @author Emanuelle Lino
 */
class ContaBanco {
    //put your code here
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if( $t == "CC"){
            $this->setSaldo(50);
        } elseif ($t == "CP"){
            $this-> saldo = 150;
        }
        
        
    }
    public function fecharConta(){
        if($this->getSaldo()>0){
            echo "<p> Conta ainda possui dinheiro, não é possível fechá-la! </p>";
        }
        elseif ($this->getSaldo() < 0){
            echo "<p> Conta em débito, impossível fechar! </p>";
        }
        else {
            $this->setStatus(false);
        }
    }
    public function depositar($v){
        if($this->getStatus()){
            $this->setStatus(($this->getSaldo() + $v));
        } else {
            echo "<p> Conta fechada, não é possível depositar. </p>";
        }
        
    }
    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            }
            else "<p> Saldo insuficiente para saque </p>";
        }
        else{
            echo"Não é possível sacar de uma conta fechada!";
        }
    }
    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $v = 12;
            
        }
        elseif
            ($this->getTipo() == "CP"){
                $V = 20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()- $v);
             
        
        }
        else {
            echo "<p> Problemas com a conta, não é possível cobrar </p>";
        }
    }
    
    public function __construct() {
       
        $this->setSaldo(0);
        $this->setStatus(false) ;
        echo "<p>Conta criada com sucesso!</p>";
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }



    
    
}
