<?php

require_once './../src/JCS/Produtos.php';
require_once './../src/JCS/Banco.php';

if(isset($_POST['salvar_user'])){
    
$iduser_ed = $_POST['iduser_editar'];
$user_ed = $_POST['user_editar'];
$pswd_ed = $_POST['pswd_editar'];
$teste = new Usuarios_Interface();
$banco_ed = new banco_crud(require_once './conexao.php', $teste);
$banco_ed->editar_user_entity($iduser_ed,$user_ed,$pswd_ed);
echo 
             '<table>'
            . '<tr>'
            . '<td>Voltar ao Perfil :</td>'  
            . '<td alingn=middle width=550><a href=index.php?page=busca_user><input  type="submit" name="nome" value="Alunos" ></a>'
            . '</td>'
            . '</tr>'
            . '</table>';
}
?>
?>
