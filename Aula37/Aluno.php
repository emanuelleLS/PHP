<?php

require_once 'Pessoa.php';
/**
 * Description of Aluno
 *
 * @author Emanuelle Lino
 */
class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    
    public function pagarMensalidade(){
        echo "<p> Aluno pagando mensalidade... </p>";
    }
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


    
}
