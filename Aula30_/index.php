<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Aula 30 - POO</title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'Caneta.php';
        $c1 = new Caneta();
        $c1->modelo = "Bic Cristal";
        $c1->cor = "Azul";
        //$c1->ponta = 0.5;
        //$c1->carga = 99;
        //$c1->tampada = true;
        
        $c1->rabiscar();
        $c1->tampar();
        var_dump($c1);
        
        ?>
    </body>
</html>
