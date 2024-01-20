<?php
require_once '../config/conn.php';
global $con;

$title = $_POST['title'];
$card = $_POST['card'];
$price = $_POST['price'];
$desc = $_POST['description'];
$id = $_POST['id'];

mysqli_query($con, "UPDATE `zam` SET `Revolut Plan`='$title', `Card`='$card', `Cena`='$price', `Opis Karty`='$desc' WHERE `id`='$id'");
header('Location: Zad5-8.php');



?>