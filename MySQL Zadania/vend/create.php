<?php
require_once '../config/conn.php';
global $con;


$title = $_POST['title'];
$card = $_POST['card'];
$price = $_POST['price'];
$desc = $_POST['description'];

$query = "INSERT INTO `zam` (`Revolut Plan`, `Card`, `Cena`, `Opis Karty`) VALUES ('$title', '$card', '$price', '$desc')";
$result = mysqli_query($con, $query);

if (!$result) {
    echo "Error: " . mysqli_error($con);
} else {
    header('Location: Zad5-8.php');
    exit();


}
