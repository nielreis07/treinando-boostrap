<?php

class ConnectDatabase 
{
    private $pdo;
    private $dsn;

    public function __construct(
        private string $username,
        private string $password
    ) {}

    public function connect(): \PDO
    {
        try {
            $this->dsn = "mysql:host=172.17.0.3;dbname=estacio;charset=utf8";

            // Criando a conexão com o PDO
            $this->pdo = new PDO($this->dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
        
            return $this->pdo;
        
        } catch (PDOException $e) {
            echo "<pre>"; print_r($e);
            echo "Erro na conexão: " . $e->getMessage();
        }
    }
}