<?php
require_once'Animal.php';
/**
 * Description of Reptil
 *
 * @author Emanuelle Lino
 */
class Reptil extends Animal{
   private $corEscama;
   
    
   public function alimentar() {
       echo "<p>Comendo Vegetais...</p>";
        
    }

    public function emitirSom() {
        echo "<p>Som de reptil...</p>";
        
    }

    public function locomover() {
        echo "<p>Rastejando...</p>";
        
    }

}
