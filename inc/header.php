<?php 
declare(strict_types=1);

session_start();
require_once "vendor/autoload.php";

$logar    = new App\Model\Logar();
$logarDao = new App\Model\LogarDaoMysql();   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST']; ?>/crud/assets/css/style.css">
    <title>PHP Da Maneira Certa - CRUD</title>
</head>
<body>