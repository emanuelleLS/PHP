<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> <h1> <pre>
            <?php
            require_once 'Mamifero.php';
            require_once 'Cachorro.php';
            require_once 'Lobo.php';
           
            $c = new cachorro();
            $c->emitirSom();
            $c->reagirFrase("Olá!");
            $c->reagirFrase("Vai apanhar");
            $c->reagirHora(11, 45);
            $c->reagirHora(21, 00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdadePeso(2, 12.5);
            $c->reagirIdadePeso(17, 4.5);
            
            
            ?>
        </pre>
    </body>
</html>
