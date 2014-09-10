<?php

namespace Projeto01;


class Cliente {

    /*Atributos da classe*/
    public $nome;
    public $cpf;
    public $email;
    public $endereco;

    /*Métodos construtor da classe*/
    public function __construct($nome, $cpf, $endereco, $email){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->email = $email;
    }

    /*Métodos da classe*/
    public function getNome(){
        return $this->nome;
    }

    public function getCPF(){
        return $this->cpf;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

}