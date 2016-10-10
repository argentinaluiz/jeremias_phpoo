<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace JCS;

/**
 * Description of Produtos
 *
 * @author jerem
 */
class Produtos  extends Banco{
    //put your code here
    
    private $id;
    private $nome;
    private $descricao;
    private $criado_em;
    private $atualizado_em;
    
    
    
    //métodos gets & sets
    
    
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        
        $this->id = $id;
        return $this;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        
        $this->nome = $nome;
        return $this;
    }
    
    
    public function getDescricao() {
        return $this->descricao;
    }
    
    public function setDescricao($descricao) {
        
        $this->descricao = $descricao;
        return $this;
    }
    
    public function getCriado_em() {
        return $this->criado_em;
    }
    
    public function setCriado_em($criado_em) {
        
        $this->criado_em = $criado_em;
        return $this;
    }
    
    public function getAtualizado_em() {
        return $this->atualizado_em;
    }
    
    public function setAtualizado_em($atualizado_em) {
        
        $this->atualizado_em = $atualizado_em;
        return $this;
    }
}
