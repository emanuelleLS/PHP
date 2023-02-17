<?php
  require_once 'Pessoa.php';

/**
 * Description of Aluno
 *
 * @author Emanuelle Lino
 */
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
    
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function pagarMensalidade(){
        echo " <p> Aluno " . $this->getNome() . " pagando mensalidade </p>";
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

 

    public function fazerAniversario() {
        echo "Aluno fazendo aniversário";
        
    }

}
