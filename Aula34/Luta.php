<?php
/**
 * Description of Luta
 *
 * @author Emanuelle Lino
 */
class Luta {

    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->desafiante = $l1;
            $this->desafiado = $l2;
            $this->aprovada = true;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo "<p>Empate!!!</p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo "Venceu " . $this->desafiante->getNome();
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case 2:
                    echo "Venceu " . $this->desafiado->getNome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
            }
        } else {
            echo "<p> Essa luta não foi aprovada! </p>";
        }
    }

}
