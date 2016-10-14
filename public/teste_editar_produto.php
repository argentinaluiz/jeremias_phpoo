<?php

if (!empty($_POST)) { /*Verifica se a variável $_POST não está vazia ou sejá! Houve a ação do submit*/


    if (isset($_POST['Editar']) && isset($_POST['Nome'])) {/*verifica se a variavel &_POST['Editar'] existe*/

        if (!empty($_POST['Editar'] && !empty($_POST['Nome'] && !empty($_POST['Descricao'])))) {/*verifica se o usuário digitou  no caso escolheu o id em questão*/
            
            echo '<table>'
            . '<tr>'
            . '<td>N° do Produto: '.$_POST['Editar'].' </td>'
            . '<td>Nome do Produto: '.$_POST['Nome'].'</td>'
            . '<td>Descrição do Produto: '.$_POST['Descricao'].'</td>'
            . '</tr>'
            . '</table>'
            . '</br>';
            
            
            
            
        
        } else {

        echo 'O n° do produto não foi escolhido';
        }
    
    }else{
        echo "O campo id não existe na variável //s_POST['id']..";
    }
}else{
    echo "Não houve á ação de submit no formulário";
}