<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_editar>'
        . '<table>'
        . '<tr>'
        . '<label>N° do Produto:<input type=number name=id_editar ></label>'
        . '<label>Novo nome:<input type=text name=nome_editar ></label>'
        . '<label>Nova descrição:<input type=text name=descricao_editar ></label>'
        . '<label><input type=submit name=salvar value=salvar>'
        . '<input type=reset name=limpar value=limpar></label>'
        . '</tr>'
        . '</table>'
        . '</form>'
        . '</body>'
        . '</html>';

