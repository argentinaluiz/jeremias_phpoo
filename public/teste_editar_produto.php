<?php

if (!empty($_POST)) { /*Verifica se a variável $_POST não está vazia ou sejá! Houve a ação do submit*/


    if (isset($_POST['Id'])) {/*verifica se a variavel &_POST['ID'] existe*/

        if (!empty($_POST['Id'] && !empty($_POST['Nome'] && !empty($_POST['Descricao'] && !empty($_POST['Criado_em'] && !empty($_POST['Atualizado_em'])))))) {/*verifica se o usuário digitou  no caso escolheu o id em questão*/
            
            echo '<table>'
            . '<tr>'
            . '<td>N° do Produto: '.$_POST['Id'].'</td>'
            . '<td>Nome do Produto: '.$_POST['Nome'].'</td>'
            . '<td>Descrição do Produto: '.$_POST['Descricao'].'</td>'
                    . '<td>Criado em : '.$_POST['Criado_em'].'</td>'
                    . '<td>Atualizado em: '.$_POST['Atualizado_em'].'</td>'
            . '</tr>'
            . '</table>'
            . '</br>';
            
            echo '<form method=post action=index.php?page=teste_controller_editar_produto>'
                 .'<p><label for=id>N° Produto: </label><input   type=number autofocus required name=id></p>'
                 .'<p><label for=nome>Novo nome: </label><input  type=text autofocus required name=nome></  p>'
                 .'<p><label for=descricao>Nova descrição: </label><input  type=text autofocus required name=descricao></p>'
                 .'<p><label for=descricao>Nova criado_em: </label><input  type=text autofocus required name=criado_em></p>'
                 .'<p><label for=descricao>Nova atualizado_em: </label><input  type=text autofocus required name=atualizado_em></p>'
                 .'<p><label>Salvar</label><input type=submit value=Ok></p>'        
                 .'</form>';
            
            
        
        } else {

        echo 'O n° do produto não foi escolhido';
        }
    
    }else{
        echo "O campo id não existe na variável //s_POST['id']..";
    }
}else{
    echo "Não houve á ação de submit no formulário";
}

