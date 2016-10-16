<?php
require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';


if(!empty($_POST)){
    
    if(isset($_POST['id']) && isset($_POST['nome'])){
       
    $id_produto = $_POST['id'];
    $nome_novo_produto = $_POST['nome'];
    $descricao_nova_produto = $_POST['descricao'];
    $criado_em_aux = $_POST['criado_em'];
    $atualizado_em_aux = $_POST['atualizado_em'];
    
        
    $db = new \JCS\Produtos(require_once '../src/JCS/conexao.php');
    $db->editar($id_produto,$nome_novo_produto, $descricao_nova_produto, $criado_em_aux,$atualizado_em_aux);
    header("Location:index.php?page=produtos");
    
   } 
}
