<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 29 - POO</title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = false;
        $c1->tampar();
        
        
        
        $c1->rabiscar();
        //var_dump($c1);
        print_r($c1);
        
        $c2 = new Caneta;
        $c2->cor = "Verde";
        
        print_r($c2);
        
        ?>
    </body>
</html>
