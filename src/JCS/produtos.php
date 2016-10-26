<?php


/*incluir classe Banco.php*/
require_once '../src/JCS/Banco.php';

/*incluir classe Produto.php*/
require_once '../src/JCS/Produtos.php';

$obj_produto = new \JCS\Produtos(require_once '../src/JCS/conexao.php');
$obj_produto->listar();
