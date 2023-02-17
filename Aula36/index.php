<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <input type="text" name="T1" size="20"> 
    <body> 
        <a href="https://classroom.google.com/a/not-turned-in/all" > Link do ClassRoom </a>;
        
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
       /* $p1 = new Pessoa();
        $p1->setNome("Emanuelle");
        $p1->setIdade(20);
        $p1->setSexo("F"); 
       
        print_r($p1); */
        
        $a1 = new Aluno("Diega", 21, "F",11234, "Engenharia de Software" );
        print_r($a1);
        $a1->pagarMensalidade();
        
        $pr1 = new Professor();
        $pr1->setNome("Bilo");
        $pr1->setIdade(50);
        $pr1->setSexo("M");
        $pr1->setEspecialidade("Linguagens de Programação");
        $pr1->setSalario(10000);
        $pr1->receberAumento(500);
        $pr1->fazerAniversario();
        print_r($pr1);
        
        $f = new Funcionario();
        $f->setNome("Jocilei");
        $f->setIdade(76);
        $f->setSetor("Almoxarife");
        $f->setTrabalhando(true);
        $f->setSexo("I");
       // print_r($f);
        echo $f->getNome() . " está " . $f->getTrabalhando();
        
        ?>
    </pre></body>
</html>
