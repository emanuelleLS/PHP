<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Professor.php';
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';
        
        $p1= new Pessoa();
        $p1->setIdade(20);
        $p1->setNome("Maria");
        $p1->setSexo("F");
        $p1->fazerAniversario();
        
        print_r($p1);
        
        $pr1 = new Professor();
        $pr1->setEspecialidade("Psicologia");
        $pr1->setSexo("F");
        $pr1->setNome("Emanuelle");
        $pr1->setSalario("8000");
        $pr1->setIdade(30);
        $pr1->fazerAniversario();
        
        print_r($pr1);
        
        $a1 = new Aluno();
        $a1->setNome("João");
        $a1->setIdade(18);
        $a1->setSexo("M");
        $a1->setCurso("Engenharia de Software");
        $a1->setMatricula(123456);
        $a1->pagarMensalidade();
        
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setNome("José");
        $b1->setIdade(19);
        $b1->setSexo("M");
        $b1->setCurso("Engenharia Química");
        $b1->setMatricula(54789);
        $b1->pagarMensalidade();
        $b1->setBolsa(5000);
        $b1->renovarBolsa();
        
        print_r($b1);
        
        $t1 = new Tecnico();
        $t1->setNome("Jocimara");
        $t1->setIdade(52);
        $t1->setSexo("F");
        $t1->setCurso("Corte e costura");
        $t1->setMatricula(55889);
        $t1->pagarMensalidade();
        $t1->getRegistroprofissional(123);
        $t1->praticar();
        
        print_r($t1);
        
        
        ?>
</pre>
    </body>
</html>
