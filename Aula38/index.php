<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> <pre>
        <?php
          require_once'Mamifero.php';
          require_once 'Reptil.php';
          require_once 'Peixe.php';
          require_once 'Ave.php';
          
          $m = new Mamifero();
          $m->setPeso(33.5);
          $m->locomover();
          $m->alimentar();
          $a = new Ave();
          $a->locomover();
          $r = new Reptil();
          $r->alimentar();
          
        ?>
</pre>
    </body>
</html>
