<?php

//cria a sessão
session_start();

$route = $_GET['route'] ?? 'start';

//executar as rotas
$script = null;
switch($route){

    case 'start':
        $script = 'start';
        break;

    case 'game':
        $script = 'game';
        break;

    case 'gameover':
        $script = 'gameover';
        break;
    
    default:
        $script = '404';
        break;
}

$capitals = require __DIR__ . '/../data/capitals.php';

//carregar as views
require_once __DIR__ . "/../scripts/header.php";
require_once __DIR__ . "/../scripts/$script.php";
require_once __DIR__ . "/../scripts/footer.php";