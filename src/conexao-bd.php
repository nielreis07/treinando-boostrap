<?php
try {
    $username = "root";  // Usuário do banco de dados
    $password = "estacio123";  // Senha do banco

    // Criando a conexão com o PDO
    $pdo = new PDO("mysql:host=172.17.0.3;dbname=estacio;charset=utf8", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);    

    // Definindo o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "<pre>"; print_r($e);
    echo "Erro na conexão: " . $e->getMessage();
}
// Conectado
?>