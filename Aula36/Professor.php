<?php
require_once 'Pessoa.php';
/**
 * Description of Professor
 *
 * @author Emanuelle Lino
 */
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function receberAumento($v){
        $this->salario += $v;
        
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }

    public function fazerAniversario() {
        echo "Professor fazendo aniversário.";
        
    }

}
