<?php
require_once 'Animal.php';
/**
 * Description of Peixe
 *
 * @author Emanuelle Lino
 */
class Peixe extends Animal {
    private $corEscama;
    
    public function soltarBolha(){
        echo "<p>Soltou uma bolha.</p>";
}
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }

        public function alimentar() {
        echo "<p>Comendo substancias...</p>";
        
    }

    public function emitirSom() {
        echo "<p>Blup, blup...</p>";
        
    }

    public function locomover() {
        echo "<p>Nadando</p>";
        
    }

}
