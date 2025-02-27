<?php
try {
    $username = "root";  // Usuário do banco de dados
    $password = "estacio123";  // Senha do banco

    // Criando a conexão com o PDO
    $pdo = new PDO("mysql:host=localhost;dbname=estacio", $username, $password);

    // Definindo o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
// Conectado
?>