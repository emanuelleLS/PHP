<?php

require_once 'Controlador.php'; //Adicione interface Controlador.php
/**
 * Description of ControleRemoto
 *
 * @author Emanuelle Lino
 */

class ControleRemoto implements Controlador {

    private $volume;
    private $ligado;
    private $tocando;

    
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<br> --- MENU ---";
        echo "<br>Está ligado? " . ($this->getLigado() ? "Sim" : "Não");  //o ponto concatena, não usa +
        echo "<br>Está tocando? " . ($this->getTocando() ? "Sim" : "Não");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 1; $i <= $this->getVolume(); $i += 10) {
            echo " | ";
        }
    }

    public function desligar() {
        if ($this->getLigado()) {
            $this->setLigado(false);
            echo "<br> Desligando... </br>";
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
            echo "<br>Saindo do mudo...</br> ";
        }
    }

    public function fecharMenu() {
        echo "<br>Fechando menu...</br>";
        
    }

    public function ligar() {
        $this->setLigado(true);
        $this->setVolume(50);
        $this->setTocando(false);
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
            echo "<br>Mudo</br>";
        }
    }

    public function maisVolume() {
        $this->setVolume($this->getVolume() + 10);
    }

    public function menosVolume() {
        $this->setVolume($this->getVolume() - 10);
    }

    public function pause() {
         if($this->getLigado() && $this->getTocando()){
        $this->setTocando(false);
        echo "<br>Pausando filme...";
        } else{
            echo"<br>Impossível pausar...</br>";
        }
        
    }

    public function play() {
        if($this->getLigado() && !($this->getTocando())){
        $this->setTocando(true);
        echo "<br>Exibindo filme...";
        }
    }

}
