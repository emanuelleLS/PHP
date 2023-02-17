<?php


/**
 *
 * @author Emanuelle Lino
 */
interface Controlador { //Não pode colocar a palavra abstract, porque ele já sabe que é
    
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();

}
