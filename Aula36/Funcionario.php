<?php
  require_once 'Pessoa.php';
/**
 * Description of Funcionario
 *
 * @author Emanuelle Lino
 */
class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;
    
    public function mudarTrabalho(){
        $this->trabalhando = ! $this-> trabalhando;
    }
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        if($this->trabalhando){
            return "Trabalhando";
        }
        else {
            return "de licença.";
        }
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }

    public function fazerAniversario() {
        echo "Funcionário fazendo aniversário";
        
    }

}
