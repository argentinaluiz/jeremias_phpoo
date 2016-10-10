<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*incluir classe Banco_crud.php*/
require_once '../src/JCS/Banco.php';

/*incluir classe Aluno.php*/
require_once '../src/JCS/Produtos.php';

$obj_produto = new \JCS\Produtos(require_once '../src/JCS/conexao.php');/*Rapaz que ganbiarra eu fin aqui KKKKKKKKK*/
$obj_produto->produtos();
