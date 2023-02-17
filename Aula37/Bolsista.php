<?php


   require_once 'Aluno.php';

/**
 * Description of Bolsista
 *
 * @author Emanuelle Lino
 */
class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p> Renovando bolsa... </p>.";
    }
    public function pagarMensalidade(){
        echo "<p> Pagando mensalidade de bolsista...</p>";
        
    }
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }


    
}
