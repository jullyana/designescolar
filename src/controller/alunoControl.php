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
     function cadastroAluno($prazo, $nucleo_nome){
        //1 - obter informações do banco de dados
        $dao = new LiderDao();
        $id = $dao.getIdLivre();
        
        //2 - validação dos dados fornecidos pelo usuário.
        if(validarPrazo($prazo)==False){
            header("Location: ../../erros/erroCadastroLider.php");
        }
        //3 - criar um objeto do Lider.
        $lider = new Lider($id,$prazo,$nucleo);
        
        //4 - executar o método de inserção.
        $dao->insertLider($lider);
    }
    
    function validarPrazo($prazo){
        //TODO - ...
        return True;
    }
}

?>
