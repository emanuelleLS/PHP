<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author Emanuelle Lino
 */
interface Publicacao {
    public function abrir();
    public function fechar ();
    public function folhear($p);
    public function avancarPag();
    public function voltarPag();
    
}
