<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorDao
 *
 * @author 20112144110384
 */
class ProfessorDao {
    //put your code here
    public function insertProfessor($Professor){
        $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO aluno
                               (nome,disciplina,email,matricula,senha)"
                                + "VALUES(?,?,?,?,?,?,?,?)");
        
        $stmt->bindParam(1,$Professor->get_nome());
        $stmt->bindParam(2,$Professor->get_disciplina());
        $stmt->bindParam(3,$Professor->get_email());
        $stmt->bindParam(4,$Professor->get_matricula());
        $stmt->bindParam(4,$Professor->get_senha());
        $stmt->execute();
    }
    
    public function deleteProfessor($Professor){}
    
    public function  updateProfessor($nome,$Professor){}
    
    public function selectProfessor($nome){}
    
    public function selectAllProfessor() {}    
    
}

?>
