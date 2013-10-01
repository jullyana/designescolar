<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of professorControl
 *
 * @author 20112144110384
 */
class professorControl {
    //put your code here
    function cadastroAluno($matricula,$senha){
        //1 - obter informações do banco de dados
        $dao = new ProfessorDao();
        $id = $dao.getIdLivre();
        
        //2 - validação dos dados fornecidos pelo usuário.
        if(validarSenha($matricula)==False){
            header("Location: ../../erros/erroCadastroProfessor.php");
        }
        //3 - criar um objeto do Lider.
        $aluno = new Aluno($matricula,$senha);
        
        //4 - executar o método de inserção.
        $dao->insertAluno($professor);
    }
    
    function validarMatricula($matricula){
        //TODO - ...
        return True;
    }
}

?>
