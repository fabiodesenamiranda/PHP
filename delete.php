<?php
require_once('./includes/connection.php');

$id = $_GET['id'];

$connection->select_db('contact-main');

$sql = "DELETE FROM contact where id = " . $id;

if($connection->query($sql)) {
    echo "Contato deletado com sucesso. <br>";
 
    header("Location: /contacts");
    
}