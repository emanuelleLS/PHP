<?php

require_once 'Aluno.php';

/**
 * Description of Tecnico
 *
 * @author Emanuelle Lino
 */
class Tecnico extends Aluno {
    private $registroprofissional;
    
    public function praticar(){
        echo "<p> Praticando... </p>";
    }
    public function getRegistroprofissional() {
        return $this->registroprofissional;
    }

    public function setRegistroprofissional($registroprofissional): void {
        $this->registroprofissional = $registroprofissional;
    }


}
