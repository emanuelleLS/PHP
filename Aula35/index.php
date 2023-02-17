<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        $p[0]= new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa ("Maria", 31, "F");
        
        
        $l[0] = new Livro("PHP Basico", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[1]);
        
        print_r($l);
            
        ?></pre>
    </body>
</html>
