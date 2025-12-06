<?php
require_once __DIR__."/Pessoa.php";
class User implements Pessoa {
    public function __construct() {
    }
    public function logar()
    {
        return "Logado como user";
    }
    public function sair()
    {
       echo "Saindo..."; 
    }

}

