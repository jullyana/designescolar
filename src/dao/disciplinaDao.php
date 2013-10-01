<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of disciplinaDao
 *
 * @author 20112144110384
 */
class DisciplinaDao {
    //put your code here
     public function insertDisciplina($disciplina){
        $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO aluno
                               (nome,carga_horaria,turma_nome,professor_matricula)"
                                + "VALUES(?,?,?,?,?,?,?,?)");
        
        $stmt->bindParam(1,$disciplina->get_nome());
        $stmt->bindParam(2,$disciplina->get_cargahoraria());
        $stmt->bindParam(3,$disciplina->get_turma_nome());
        $stmt->bindParam(4,$disciplina->get_professor_matricula());
       
        $stmt->execute();
    }
    public function deleteAluno($aluno){}
    
    public function  updateAluno($nome,$aluno){}
    
    public function selectAluno($nome){}
    
    public function selectAllAluno() {}    
    
}

?>
