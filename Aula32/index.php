<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 32</title>
    </head>
    <body>
        <h1> Projeto Controle Remoto </h1>
        <pre>
        <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->ligarMudo();
        $c->desligarMudo();
        //$c->play();
        $c->pause();
        $c->maisVolume();
        $c->maisVolume();
        $c->menosVolume();
        $c->abrirMenu();
        $c->fecharMenu();
        $c->desligar();
        
        ?>
        </pre>
    </body>
</html>
