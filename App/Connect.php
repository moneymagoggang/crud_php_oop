<?php

namespace App;

class Connect {
    public string $host = 'localhost';
    public string $user = 'root';
    public string $pass = 'root';
    public string $db = 'crud';

    public object $connection;
    public function __construct(){
        $this->connection = new \mysqli($this->host, $this->user, $this->pass, $this->db);

// Проверка подключения
        if ($this->connection->connect_error) {
            die('Ошибка подключения: ' . $this->connection->connect_error);
        } else {
            echo 'Успешное подключение к базе данных.<br>';
        }
    }
}