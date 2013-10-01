<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professor
 *
 * @author 20112144110384
 */
class Professor {
    //put your code here
    public $nome;
    public $disciplina;
    public $email;
    public $matricula;
    public $senha;
    
     /** Construtor serve para instanciar um objeto.*/
    function __construct($nome, $disciplina, $email, $matricula, $senha) {
        $this->nome = $nome;
        $this->disciplina = $sobrenome;
        $this->email = $email;
        $this->matricula = $matricula;
        $this->senha = $senha;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDisciplina() {
        return $this->sobrenome;
    }

    public function setDisciplina($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e_mail) {
        $this->e_mail = $email;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    
    }



?>
