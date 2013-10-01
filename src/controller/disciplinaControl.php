<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of disciplinaControl
 *
 * @author 20112144110384
 */
class DisciplinaControl {
    //put your code here
    function cadastroAluno($nome){
        //1 - obter informações do banco de dados
        $dao = new DisciplinaDao();
        $id = $dao.getIdLivre();
        
        //2 - validação dos dados fornecidos pelo usuário.
        if(validarSenha($nome)==False){
            header("Location: ../../erros/erroCadastroDisciplina.php");
        }
        //3 - criar um objeto do Lider.
        $aluno = new Aluno($nome,$turma_nome);
        
        //4 - executar o método de inserção.
        $dao->insertAluno($disciplina);
    }
    
    function validarMatricula($nome){
        //TODO - ...
        return True;
    }

}

?>
