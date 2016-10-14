<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace JCS;

/**
 * Description of Banco
 *
 * @author jerem
 */
class Banco {
        //put your code here
    
    private $db;
    
    
    public function __construct(\PDO $db) {
        
        $this->db = $db;
                
    }
    
    public function listar() {
        
        $query = "select * from produtos";
        $stmt = $this->db->query($query);
        $stmt->execute();
        
        while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $id = $resultado['id'];
            $nome = $resultado['nome'];
            $descricao = $resultado['descricao'];
            $criado_em = $resultado['criado_em'];
            $atuazado_em = $resultado['atualizado_em'];
            
            
            echo '<form method=post action=index.php?page=editar_produto>'
            . '<table>.'
            . '<tr><br><td>Identificador::'.$id.'</td><td><a href=index.php?page=editar_produto><input type=submit values=Editar name=Editar></a></td></tr>'
            . '<tr><br><td>Nome::'.$nome.'</td><td><a href=index.php?page=excluir><input type=submit value=Excluir name=Excluir></a></td></tr>'
            . '<tr><br><td>Descrição::'.$descricao.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '<tr><br><td>Criado Em::'.$criado_em.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '<tr><br><td>Atualizado Em::'.$atuazado_em.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '</table>'
            . '</form>';
           
            /*echo '<table>.'
            . '<tr><br><td>Identificador::'.$id.'</td><td><a href=index.php?page=editar_produto><input type=submit value=Editar name=Editar></a></td></tr>'
            . '<tr><br><td>Nome::'.$nome.'</td><td><a href=index.php?page=excluir><input type=submit value=Excluir name=Excluir></a></td></tr>'
            . '<tr><br><td>Descrição::'.$descricao.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '<tr><br><td>Criado Em::'.$criado_em.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '<tr><br><td>Atualizado Em::'.$atuazado_em.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '</table>';
            */
            
        }
        
    }
    
    /*Lista de teste para o tratar pegando o valor da lista*/
    public function listar_teste() {
        
        $query = "select id,nome,descricao from produtos ";
        $stmt = $this->db->query($query);
        $stmt->execute();
        
        while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $id = $resultado['id'];
            $nome = $resultado['nome'];
            $descricao = $resultado['descricao'];
            //$criado_em = $resultado['criado_em'];
            //$atuazado_em = $resultado['atualizado_em'];
            //<a href=index.php?page=teste_editar_produto>
            
            
            
            echo '<form method=post action=index.php?page=teste_editar_produto>'
            . '<table>.'
            . '<tr><br><td>Identificador::'.$id.'</td><td><input type=hidden value='.$id.' name=Editar><input type=hidden value='.$resultado['nome'] .' name=Nome><input type=hidden size=150 value='.$resultado['descricao'] .' name=Descricao><button type=submit>Editar</button></td></tr>'
            . '<tr><br><td>Nome::'.$nome.'</td><td><a href=index.php?page=excluir><input type=submit value=Excluir name=Excluir></a></td></tr>'
            . '<tr><br><td>Descrição::'.$descricao.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '</table>'
            . '</form>';
           
            /*echo '<table>.'
            . '<tr><br><td>Identificador::'.$id.'</td><td><a href=index.php?page=editar_produto><input type=submit value=Editar name=Editar></a></td></tr>'
            . '<tr><br><td>Nome::'.$nome.'</td><td><a href=index.php?page=excluir><input type=submit value=Excluir name=Excluir></a></td></tr>'
            . '<tr><br><td>Descrição::'.$descricao.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '<tr><br><td>Criado Em::'.$criado_em.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '<tr><br><td>Atualizado Em::'.$atuazado_em.'</td><td><a href=index.php?page=#></a></td></tr>'
            . '</table>';
            */
            
        }
        
    }
    /*Termina aqui o teste de lista e pegando o valor.*/
    
    public function inserir($nome, $descricao, $criado_em, $atualizado_em){
        
        $query = "insert into produtos(nome, descricao, criado_em, atualizado_em) values(:nome, :descricao, :criado_em, :atualizado_em)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome",$nome, \PDO::PARAM_STR);
        $stmt->bindValue(":descricao",$descricao, \PDO::PARAM_STR);
        $stmt->bindValue(":criado_em",$criado_em, \PDO::PARAM_STR);
        $stmt->bindValue(":atualizado_em",$atualizado_em, \PDO::PARAM_STR);
        
        $stmt->execute();
        
        while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
            
            $nomeN = $resultado['nome'];
            $descricaoN = $resultado['descricao'];
            $criado_emN =$resultado['criado_em'];
            $atualizado_emN =$resultado['atualizado_em'];
            
            
            
            if(($nomeN == $nome && $nomeN != NULL) && ($descricaoN == $descricao && $descricaoN != NULL) ){
                
        
                header("Location:index.php?produtos");
            
                
            }  elseif(($nomeN != $nome && $nomeN != NULL) && ($descricaoN != $descricao && $descricaoN != NULL)) {
                echo "Erro no cadastro do aluno!!!: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
                header("Location:index.php?page=novo_produto");
            }
        }
    }
    
    public function editar($id,$nome,$descricao,$criado,$atualizado) {
     
        if($id !=null && $nome != null && $descricao != null ){
                    
        $query = "update produtos set nome=:nome , descricao=:descricao , criado=:criado_em, atualizado=:atualizado_em  where id=:id";
        $stmt = $this->db->prepare($query);
        
        $id_fun = $id;
        $nome_fun = $nome;
        $descri_fun = $descricao;
        $criado_fun = $criado;
        $atualizado_fun = $atualizado;
        
        $stmt->bindValue(":id", $id_fun,  PDO::PARAM_INT);
        $stmt->bindValue(":nome", $nome_fun,  PDO::PARAM_STR);
        $stmt->bindValue(":descricao", $descri_fun,  PDO::PARAM_STR);
        $stmt->bindValue(":criado", $criado_fun,  PDO::PARAM_STR);
        $stmt->bindValue(":atualizado", $atualizado_fun,  PDO::PARAM_STR);
        $stmt->execute();
        if($stmt){
            
        echo "Dados doproduto $nome_fun atualizados com sucesso: <br/>N° de Linhas atualizadas :".$stmt->rowCount()."<br/>";
       // return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            echo "Os dados não foram atualizados";
        }
        }elseif($id == null || $nome == null || $descricao == null){
            echo "Por favor informe os dados do produto: ";
            echo '<a href=index.php?page=editar_produto>Editar Produto</a>';
        }
    }
    
}
