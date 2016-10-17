<?php
require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';


if(!empty($_POST)){
 
if(isset($_POST['buscar_nome'])){
    

$obj = new JCS\Produtos(require_once '../src/JCS/conexao.php');

$buscar = $_POST['buscar_nome']; 

$obj->listarPN($buscar);
       
echo '<body>'
      . '<table>'
      . '<tr>'
      . '<td>Voltar Lista :</td>'  
      . '<td alingn=middle width=550><a href=index.php?page=produtos><input  type="submit" name="produtos" value="produtos" ></a>'
      . '</td>'
      . '</tr>'
       . '</table>'  
      . '</body>';
 }
}
?>