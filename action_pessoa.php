<?php
include_once "inc/check_login.php";

if($logarDao->checkLogin()) {
    $pessoa    = new App\Model\Pessoa();
    $pessoaDao = new App\Model\PessoaDaoMysql(); 

    switch($_REQUEST['option']) {
        case "create":
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $pessoa->setCpf($_REQUEST['cpf']);
                $pessoa->setNome($_REQUEST['nome']);
                
                $pessoaDao->create($pessoa);
            } 
        break;    

        case "update":
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $pessoa->setId($_REQUEST['id']);
                $pessoa->setCpf($_REQUEST['cpf']);
                $pessoa->setNome($_REQUEST['nome']);
                
                $pessoaDao->update($pessoa);
            } 
        break;

        case "delete":
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $pessoaDao->delete($_REQUEST['id']);        
            }
        break;
    }
    die(header("Location: http://".$_SERVER['HTTP_HOST']."/crud"));
} else {
    die(header("Location: http://".$_SERVER['HTTP_HOST']."/crud/login"));
}