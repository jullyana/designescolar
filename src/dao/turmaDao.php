<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turmaDao
 *
 * @author 20112144110384
 */
class TurmaDao {
    //put your code here
     public function insertTurma($Turma){
        $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO aluno
                               (codigo, periodo, turno, disciplina_nome)"
                                + "VALUES(?,?,?,?,?,?,?,?)");
        
        $stmt->bindParam(1,$Turma->get_codigo());
        $stmt->bindParam(2,$Turma->get_periodo());
        $stmt->bindParam(3,$Turma->get_turno());
        $stmt->bindParam(4,$Turma->get_disciplina_nome());
       
        $stmt->execute();
    }
    public function deleteTurma($Turma){}
    
    public function  updateTurma($nome,$Turma){}
    
    public function selectTurma($nome){}
    
    public function selectAllTurma() {}    
    
}

?>
