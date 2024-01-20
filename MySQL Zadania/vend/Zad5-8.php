<?php
require_once '../config/conn.php';
global $con;
global $zam;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Zamówienia</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Typ Karty Revolut</th>
        <th>Kolor Karty Revolut</th>
        <th>Cena</th>
        <th>Opis</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($zam as $item) {
        echo "<tr>";
        echo "<td>" . $item['id'] . "</td>";
        echo "<td>" . $item['Revolut Plan'] . "</td>";
        echo "<td>" . $item['Card'] . "</td>";
        echo "<td>" . $item['Cena'] . "</td>";
        echo "<td>" . $item['Opis Karty'] . "</td>";
        echo "<td><a href='update.php?id=" . $item['id'] . "'>&#9998; Zaktualizować</a></td>";
        echo "<td><a href='delete.php?id=" . $item['id'] . "'>&#10006; Usuń</a></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<h2>Wymyśl swoją kartę</h2>
<form action="create.php" method="post">
    <p>Typ Karty</p>
    <input type="text" name="title" placeholder="Typ Karty">
    <p>Kolor Karty</p>
    <input type="text" name="card" placeholder="karta">
    <p>Opis</p>
    <textarea name="description" placeholder="Opis"></textarea>
    <p>Cena</p>
    <input type="number" name="price" placeholder="Cena">
    <button type="submit">Dodaj</button>
</form>
</body>
</html>
