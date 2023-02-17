<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author Emanuelle Lino
 */
class Caneta {
   public $modelo;
   public $cor;
   private $ponta;
   protected $carga;
   protected $tampada;
   public function getModelo() {
       return $this->modelo;
   }

   public function getCor() {
       return $this->cor;
   }

   public function getPonta() {
       return $this->ponta;
   }

   public function getCarga() {
       return $this->carga;
   }

   public function getTampada() {
       return $this->tampada;
   }

   public function setModelo($modelo): void {
       $this->modelo = $modelo;
   }

   public function setCor($cor): void {
       $this->cor = $cor;
   }

   public function setPonta($ponta): void {
       $this->ponta = $ponta;
   }

   public function setCarga($carga): void {
       $this->carga = $carga;
   }

   public function setTampada($tampada): void {
       $this->tampada = $tampada;
   }

      public function __construct($modelo, $cor, $ponta, $carga, $tampada) {
       $this->modelo = $modelo;
       $this->cor = $cor;
       $this->ponta = $ponta;
       $this->carga = $carga;
       $this->tampada = $tampada;
   }

   
   public function rabiscar (){
       if ($this->tampada) {
           echo "<p>  ERRO! Não posso rabiscar...";
           
       }
       echo "<p>Estou rabiscando...</p>";
   }
   public function tampar(){
       $this->tampada = true;
       
   }
    public function destampar(){
       $this->tampada = false;
       
   }
}
