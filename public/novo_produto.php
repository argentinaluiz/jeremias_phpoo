<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_novo_produto>'
        . '<table>'
        . '<tr>'
        . '<label>Nome da Pizza:<input type=text name=nome_pizza ></label>'
        . '<label>Descrição:<input type=text name=descricao size=50 ></label>'
        . '<label>Criado_em:<input type=text name=criadoE></label>'
        . '<label>Atualizado_em:<input type=text name=atualE ></label>'
        . '<label><input type=submit name=Novo value=Novo>'
        . '<input type=reset name=limpar value=Limpar></label>'
        . '</tr>'
        . '</table>'
        . '</form>'
        . '</body>'
        . '</html>';
