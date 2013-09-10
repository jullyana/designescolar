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
    public $sobrenome;
    public $e_mail;
    public $matricula;
    public $senha;
    public $turmas_nome;
    
     /** Construtor serve para instanciar um objeto.*/
    function __construct($nome, $sobrenome, $e_mail, $matricula, $senha, $turmas_nome) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->e_mail = $e_mail;
        $this->matricula = $matricula;
        $this->senha = $senha;
        $this->turmas_nome = $turmas_nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getE_mail() {
        return $this->e_mail;
    }

    public function setE_mail($e_mail) {
        $this->e_mail = $e_mail;
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

    public function getTurmas_nome() {
        return $this->turmas_nome;
    }

    public function setTurmas_nome($turmas_nome) {
        $this->turmas_nome = $turmas_nome;
    }


}

?>
