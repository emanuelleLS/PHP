<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 33</title>
    </head>
    <body> <pre>
            <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 11);
            $l[3] = new Lutador("Dead Code ", "Austrália", 28, 1.93, 81.6, 13, 9, 2);
            $l[4] = new Lutador("UFOCobol ", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $l[5] = new Lutador("Nerdart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $u = array();
            /*
            $u[0] = new Luta();
            $u[0]->marcarLuta($l[0], $l[1]);
            $u[0]->lutar();
            $l[0]->status();
            $l[1]->status(); 
             * 
             */

            $u[1] = new Luta();
            $u[1]->marcarLuta($l[4], $l[5]);
            $u[1]->lutar();
            $l[4]->status();
            $l[5]->status();
            ?>
        </pre>
    </body>
</html>
