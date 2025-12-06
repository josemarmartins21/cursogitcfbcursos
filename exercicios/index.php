<?php
require_once __DIR__."/Funcionario.php";
require_once __DIR__."/Administrador.php";
require_once __DIR__."/User.php";
require_once __DIR__."/Executor.php";
require_once __DIR__."/Pessoa.php";
$exe = new Executor;
print "{$exe->executarLogin(new Funcionario)} \n"; 
print "{$exe->executarLogin(new User)} \n"; 
print "{$exe->executarLogin(new Administrador)}"; 

