<?php

session_start();

// Controle
define('CONTROL', true);

// Rotas
$route = $_GET['route'] ?? 'start';

$script = null;

switch ($route) {
    case 'start':
        $script = 'start.php';
        break;
    case 'game':
        $script = 'game.php';
        break;
    default:
        $script = '404.php';
        break;
}

// View
require "includes/header.php";
require "app/$script";
require "includes/footer.php";
