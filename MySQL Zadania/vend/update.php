<?php
require_once '../config/conn.php';

$zam_id = $_GET['id'];
$zam_query = mysqli_query($con, "SELECT * FROM `zam` WHERE id = '$zam_id'");
$zam = mysqli_fetch_assoc($zam_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Zaktualizowac</title>
</head>
<body>
<h2>Zaktualizowac swoją kartę</h2>
<form action="mein_update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $zam_id; ?>">
    <p>Typ Karty</p>
    <input type="text" name="title" placeholder="Typ Karty" value="<?php echo $zam['Revolut Plan']; ?>">
    <p>Kolor Karty</p>
    <input type="text" name="card" placeholder="karta" value="<?php echo $zam['Card']; ?>">
    <p>Opis</p>
    <textarea name="description" placeholder="Opis"><?php echo $zam['Opis Karty']; ?></textarea>
    <p>Cena</p>
    <input type="number" name="price" placeholder="Cena" value="<?php echo $zam['Cena']; ?>">
    <button type="submit">Zaktualizuj</button>
</form>
</body>
</html>
