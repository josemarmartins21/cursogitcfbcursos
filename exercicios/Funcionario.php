<?php
require_once __DIR__."/Pessoa.php";
class Funcionario implements Pessoa {
    public function logar()
    {
        return "Logado como funcionario";
    }

    public function sair()
    {
        
    }
}