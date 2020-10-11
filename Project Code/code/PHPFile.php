<?php
    $host       = '127.0.0.1';
    $database   = 'mysql';
    $port       = 3306;
    $user       = 'root';
    $password   = '1234';
    
    try {
        $this->connection = new PDO($database . ":host=" . $host . ';port=' . $port, $user, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->connection;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>

