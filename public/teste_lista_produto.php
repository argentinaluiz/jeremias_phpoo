<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../src/JCS/Banco.php';
require_once '../src/JCS/Produtos.php';

$obj_banco = new \JCS\Produtos(require_once'../src/JCS/conexao.php'  );

$obj_banco->listar_teste();
