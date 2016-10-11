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
    
    public function produtos() {
        
        $query = "select * from produtos";
        $stmt = $this->db->query($query);
        $stmt->execute();
        
        while($resultado = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $id = $resultado['id'];
            $nome = $resultado['nome'];
            $descricao = $resultado['descricao'];
            $criado_em = $resultado['criado_em'];
            $atuazado_em = $resultado['atualizado_em'];
            
        
            echo '<table>.'
            . '<tr><br><td>Identificador::'.$id.'</td></tr>'
            . '<tr><br><td>Nome::'.$nome.'</td></tr>'
            . '<tr><br><td>Descrição::'.$descricao.'</td></tr>'
            . '<tr><br><td>Criado Em::'.$criado_em.'</td></tr>'
            . '<tr><br><td>Atualizado Em::'.$atuazado_em.'</td></tr>'
            . '</table>';
            
            
        }
        
    }
    
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
}
