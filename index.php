<?php
// Exemplo simples de roteamento
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page) {
    case 'login':
        include 'views/usuarios/login.php';
        break;
    case 'lista_carros':
        include 'views/carros/lista.php';
        break;
    // Outras rotas...
    default:
        echo "<h1>Bem-vindo ao sistema de Aluguel de Carros</h1>";
        break;
}
