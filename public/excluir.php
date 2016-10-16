<?php
echo     '<html>'
        . '<body>'
        . '<form method=post action=index.php?page=controller_excluir>'
        . '<table>'
        . '<tr>'
        . '<label>N° Produto::<input type=number name=id_excluir ></label>'
        . '<label>Nome ::<input type=text name=nome_excluir ></label>'
        . '<label>Descrição ::<input type=text name=descricao_excluir ></label>'
        . '<label><input type=submit name=excluir value=excluir>'
        . '<input type=reset name=limpar value=limpar></label>'
        . '</tr>'
        . '</table>'
        . '</form>'
        . '</body>'
        . '</html>';
?>
