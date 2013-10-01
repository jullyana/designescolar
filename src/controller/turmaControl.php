<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of turmaControl
 *
 * @author 20112144110384
 */
class TurmaControl {
    //put your code here
    function cadastroAluno($codigo,$periodo){
        //1 - obter informações do banco de dados
        $dao = new TurmaDao();
        $id = $dao.getIdLivre();
        
        //2 - validação dos dados fornecidos pelo usuário.
        if(validarSenha($codigo)==False){
            header("Location: ../../erros/erroCadastroTruma.php");
        }
        //3 - criar um objeto do Lider.
        $aluno = new Aluno($codigo,$periodo);
        
        //4 - executar o método de inserção.
        $dao->insertAluno($turma);
    }
    
    function validarMatricula($codigo){
        //TODO - ...
        return True;
    }
}

?>
