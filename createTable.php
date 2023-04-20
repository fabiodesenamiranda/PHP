<?php
require_once('./connection.php');

$sql = "CREATE TABLE contact-main (" .
    "id INT UNSIGNED AUTO_INCREMENT,".
    "name VARCHAR(60) NOT NULL ,".
    "lastname VARCHAR(60),".
    "address VARCHAR(60),".
    "phone VARCHAR(60) NOT NULL,".
    "email VARCHAR(60),".
    "create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, " .
    "primary key(id)" .
    ");";

$connection->select_db('contact-main');

if($connection->query($sql)) {
    echo "Tabela contact-main criada com sucesso. <br>";
} else {
    echo "erro na criação da tabela: " . $connection->error;
}

$connection->close();