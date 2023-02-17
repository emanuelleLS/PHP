<?php
require_once 'Animal.php';
/**
 * Description of Ave
 *
 * @author Emanuelle Lino
 */
class Ave extends Animal{
    private $corPena;
    public function fazerNinho(){
        echo "<p>Construiu um ninho.</p>";
    }
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }

        public function alimentar() {
        echo "<p>Comendo Frutas...</p>";
        
    }

    public function emitirSom() {
        echo "<p>Som de Ave</p>";
        
    }

    public function locomover() {
        echo "<p>Voando</p>";
        
    }

}
