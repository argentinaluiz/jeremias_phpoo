<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';

if(isset($_POST['Novo'])){
    
    $nome_p =$_POST['nome_pizza'];
    $descricao =$_POST['descricao'];
    $criadoE_p =$_POST['criadoE'];
    $atualizadoE =$_POST['atualE'];
    
    
    $novapizza = new JCS\Produtos(require_once '../src/JCS/conexao.php');
    
     $novapizza->inserir($nome_p,$descricao,$criadoE_p,$atualizadoE);
     header("Location:index.php?page=produtos");
    
}
