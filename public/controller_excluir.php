<?php

require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';

if(!empty($_POST)){
    
    if(isset($_POST['id_excluir'])){
        
        echo ''.$_POST['id_excluir'];
        $auxid = $_POST['id_excluir'];
        //$auxnome = $_POST['nome_excluir'];
        
        $obj = new \JCS\Produtos(require_once '../src/JCS/conexao.php');
        
        $obj->deletar($auxid);
        
        header("Location:index.php?page=produtos");
    
        
    }
}
