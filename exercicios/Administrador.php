<?php
require_once __DIR__."/Pessoa.php";
class Administrador implements Pessoa {
    public function logar() {
        return "Logado como Admin";
    }
    public function sair()
    {
        
    }
    public function remover() {
        
    }
}
