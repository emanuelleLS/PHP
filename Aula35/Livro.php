<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Livro
 *
 * @author Emanuelle Lino
 */
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function detalhes(){
        
    }
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
        
    }

    public function avancarPag() {
        $this->pagAtual ++;
        
    }

    public function fechar() {
        $this->aberto = false;
        
    }

    public function folhear($p) {
        if($p>$this->totPaginas){
            $this->pagAtual = 0;
        }
        else{
            $this->pagAtual = $p;
        }
        
    }

    public function voltarPag() {
        $this->pagAtual --;
        
    }

}
