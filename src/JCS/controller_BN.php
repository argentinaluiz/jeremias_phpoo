<?php

use JCS\Banco;
use JCS\Model\Produtos;
use JCS\Conexao;

if(!empty($_POST)){
 
if(isset($_POST['buscar_nome'])){
    
$conexao = new Conexao();
$obj = new Produtos($conexao->getDB());

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
<script type="text/javascript">
alert('Olá Mundo');
</script>