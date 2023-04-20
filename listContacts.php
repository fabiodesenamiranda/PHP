<?php 
require_once('./includes/connection.php');

$connection->select_db('contact-main');

$sql = "SELECT * from contact ORDER BY name";
$result = $connection->query($sql);

if($connection->error) {
    echo "erro no acesso a tabela: " . $connection->error;
} 

$result -> fetch_all(MYSQLI_ASSOC);

foreach($result as $row) {
    printf("<li>%s %s - %s - %s - %s <button><a href='./delete.php?id=%s'>Excluir</a></button> </li>", $row["name"], $row["lastname"], $row["address"], $row["email"], $row["phone"], $row["id"]);

}

$connection->close();