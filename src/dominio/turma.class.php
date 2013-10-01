<!doctotype html>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turma
 *
 * @author 20112144110384
 */
class Turma {
    //put your code here
    public $codigo;
    public $periodo;
    public $turno;
    
    /** Construtor serve para instanciar um objeto.*/
    function __construct($codigos, $periodo, $turno) {
     
        $this->codigos = $codigos;
        $this->periodo = $periodo;
        $this->turno = $turno;
       
    }


    public function getCodigos() {
        return $this->codigos;
    }

    public function setCodigos($codigos) {
        $this->codigos = $codigos;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function getTurno() {
        return $this->turno;
    }

    public function setTurno($turno) {
        $this->turno = $turno;
    }


}

?>
