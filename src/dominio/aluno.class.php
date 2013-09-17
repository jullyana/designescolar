<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aluno
 *
 * @author 20112144110384
 */
class Aluno {
    //put your code here
    private $nome;
    private $sobrenome;
    private $email;
    private $matricula;
    private $senha;
    private $turmas_nome;
    private $comentario;
    
    /** Construtor serve para instanciar um objeto.*/
    function __construct($nome, $sobrenome, $email, $matricula, $senha, $turmas_nome) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
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
