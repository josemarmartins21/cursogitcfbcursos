<?php
require_once __DIR__."/Pessoa.php";
class Executor {
    public function executarLogin(Pessoa $pessoa) {
        return $pessoa->logar();
    }
    public function executarSair(Pessoa $pessoa) {
        return $pessoa->sair();
    }
}