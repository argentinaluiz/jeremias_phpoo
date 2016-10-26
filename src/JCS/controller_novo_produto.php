<?php


require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';
if(!empty($_POST)){
    
    if(isset($_POST['Novo'])){
        
        $aux_id = $_POST['id_pizza'];
        $aux_nome = $_POST['nome_pizza'];
        $aux_descricao = $_POST['descricao_pizza'];
        $aux_criado = $_POST['criado_pizza'];
        $aux_atual = $_POST['atualizado_pizza'];
        
        $banco = new \JCS\Produtos(require_once '../src/JCS/conexao.php');
        
        $banco->inserir($aux_id, $aux_nome, $aux_descricao, $aux_criado, $aux_atual);
       
   /*     
   echo '<table>'
   . '<tr>'
   . '<td> ID: '.$aux_id.'</td>'
   . '<td> NOME: '.$aux_nome.'</td>'
   . '<td> NOTA: '.$aux_descricao.'</td>'     
   . '</tr>'
   . '</table>';
   */ 
    }
}