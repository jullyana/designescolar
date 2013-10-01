<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of alunoControl
 *
 * @author 20112144110384
 */
class AlunoControl {
    //put your code here
     function cadastroAluno($matricula,$senha){
        //1 - obter informações do banco de dados
        $dao = new AlunoDao();
        $id = $dao.getIdLivre();
        
        //2 - validação dos dados fornecidos pelo usuário.
        if(validarSenha($matricula)==False){
            header("Location: ../../erros/erroCadastroAluno.php");
        }
        //3 - criar um objeto do Lider.
        $aluno = new Aluno($nome,$matricula,$nucleo);
        
        //4 - executar o método de inserção.
        $dao->insertAluno($aluno);
    }
    
    function validarMatricula($matricula){
        //TODO - ...
        return True;
    }
}

?>
