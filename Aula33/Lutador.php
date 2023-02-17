<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Lutador
 *
 * @author Emanuelle Lino
 */
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;
    
    function apresentar(){
        echo "<p> ------------------------------- </p>";
        echo "<p> CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente  de " . $this->getNacionalidade();
        echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "kg. ";
        echo "<br> Ele tem " . $this->getVitorias() . " vitórias, ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates. </p>";
        
    }
    function status(){
        echo " <p> ---------------------------- </p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes," ;
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates() . " vezes!";
        
    }
    function ganharLuta(){
        $this->setVitorias(($this->getVitorias()+ 1));
        
    }
    function perderLuta(){
        $this->setDerrotas(($this->getDerrotas() + 1));
        
    }
    function empatarLuta(){
        $this->setEmpates(($this->getEmpates() + 1));
        
    }
    
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria(): void {
          if ($this->peso < 52.2){
              $this->categoria = "Inválido";
          }
          elseif ($this->peso <= 70.3){
              $this->categoria = "Leve";
          }
          elseif($this->peso <= 83.9){
              $this->categoria = "Médio";
          }
          elseif($this->peso <= 120.2){
              $this->categoria = "Pesado";
              
          } else{
              $this->categoria = "Inválido";
          }
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }


    
}
