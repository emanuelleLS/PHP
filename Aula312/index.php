<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ContaBanco</title>
    </head>
    <body> <pre>
        <?php
        // put your code here
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco();
        $p2 = new ContaBanco();
        
        $p1->abrirConta("CC");
        $p1->setNumConta(111);
        $p1->setDono("Jubileu");
        $p2->abrirConta("CP");
        $p2->setNumConta(222);
        $p2->setDono("Creusa");
        $p1->depositar(300);
        $p2->depositar(500);
        
        
        
        print_r($p1);
        print_r($p2);
       
        
        
        
        ?>
   </pre> </body>
</html>
