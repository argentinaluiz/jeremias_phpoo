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
}
