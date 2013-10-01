<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of diciplina
 *
 * @author 20112144110384
 */
class Diciplina {
    //put your code here
   public $nome;
   public $carga_horaria;
   public $turmas_nome;
   
    /** Construtor serve para instanciar um objeto.*/
   function __construct($nome,$carga_horaria, $turmas_nome) {
       $this->nome = $nome;
       $this->carga_horaria = $carga_horaria;
       $this->turmas_nome = $turmas_nome;
   }
   public function getNome() {
       return $this->nome;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function getEmenta() {
       return $this->ementa;
   }

   public function setEmenta($ementa) {
       $this->ementa = $ementa;
   }

   public function getCarga_horaria() {
       return $this->carga_horaria;
   }

   public function setCarga_horaria($carga_horaria) {
       $this->carga_horaria = $carga_horaria;
   }

   public function getTurmas_nome() {
       return $this->turmas_nome;
   }

   public function setTurmas_nome($turmas_nome) {
       $this->turmas_nome = $turmas_nome;
   }


}

?>
