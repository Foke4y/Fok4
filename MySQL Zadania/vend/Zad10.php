<?php

require_once '../config/conn.php';


$title = $_POST['title'];
$card = $_POST['card'];
$price = $_POST['price'];
$desc = $_POST['description'];

secureInputAndInsert($con, $title, $card, $price, $desc);

function secureInputAndInsert($con, $title, $card, $price, $desc) {
$stmt = mysqli_prepare($con, "INSERT INTO `zam` (`Revolut Plan`, `Card`, `Cena`, `Opis Karty`) VALUES (?, ?, ?, ?)");

if ($stmt === false) {
die('Prepare failed: ' . htmlspecialchars(mysqli_error($con)));
}

mysqli_stmt_bind_param($stmt, 'ssis', $title, $card, $price, $desc);

mysqli_stmt_execute($stmt);

if(mysqli_stmt_error($stmt)) {
die('Execute failed: ' . htmlspecialchars(mysqli_stmt_error($stmt)));
}

mysqli_stmt_close($stmt);

echo "Dane zostały bezpiecznie zapisane.";
}
