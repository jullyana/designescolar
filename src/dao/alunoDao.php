<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/aluno.class.php';
include 'connectionFactory.inc.php';

class AlunoDao{
    public function insertAluno($aluno){
        $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO aluno
                               (nome,sobrenome,email,matricula,senha,turma_nome,comentario)"
                                + "VALUES(?,?,?,?,?,?,?,?)");
        
        $stmt->bindParam(1,$aluno->get_nome());
        $stmt->bindParam(2,$aluno->get_sobrenome());
        $stmt->bindParam(3,$aluno->get_email());
        $stmt->bindParam(4,$aluno->get_matricula());
        $stmt->bindParam(5,$aluno->get_senha());
        $stmt->bindParam(6,$aluno->get_turma_nome());
        $stmt->bindParam(7,$aluno->get_comentarios());
        $stmt->execute();
    }
    
    public function deleteAluno($aluno){}
    
    public function  updateAluno($nome,$aluno){}
    
    public function selectAluno($nome){}
    
    public function selectAllAluno() {}    
    
}
?>
