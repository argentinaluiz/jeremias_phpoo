<?php
require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';


if(!empty($_POST)){
    
    /*if(isset($_POST['id']) && isset($_POST['nome'])){
    echo "Se o id foi enviado -> ".$_POST['id']."<br> e o nome: ".$_POST['nome']."<br> e o produto: "
            . "".$_POST['descricao'].""
            . "<br> quando foi criado:"
            . "".$_POST['criado_em']."<br>";
    }
     * 
     */
    if(isset($_POST['Ok'])){
    $id_produto = $_POST['Id'];
    $nome_novo_produto = $_POST['Nome'];
    $descricao_nova_produto = $_POST['Descricao'];
    $criado_em_aux = $_POST['criado_em'];
    $atualizado_em_aux = $_POST['atualizado_em'];
    
    $db = new \JCS\Produtos(require_once '../src/JCS/conexao.php');
    $db->editar_teste($id_produto,$nome_novo_produto, $descricao_nova_produto, $criado_em_aux,$atualizado_em_aux);
    }    
}

/*
require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';



if(!empty($_POST)){//Aqui ele verifica se o submit foi clicado
    if (isset($_POST['id'])&& isset($_POST['nome']) && isset($_POST['descricao'])) {//verifica se existe os $_POST['nome']
        
        $id_produto = $_POST['id'];
        $nome_novo_produt = $_POST['nome'];
        $descricao_nova_produto = $_POST['descricao'];
        
        $db = new \JCS\Banco(require_once '../src/JCS/conexao.php');
        $db->editar($id_produto,$nome_novo_produt, $descricao_nova_produto);
         

         }
    }
*/