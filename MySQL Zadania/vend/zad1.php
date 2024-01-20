<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die("Błąd połączenia: " . mysqli_connect_error());
}
mysqli_select_db($con, "TestPHP");

mysqli_query($con, "CREATE TABLE IF NOT EXISTS PrzykladowaTabela (    ID INT AUTO_INCREMENT PRIMARY KEY, imie VARCHAR(128),  nazwisko VARCHAR(128), miasto VARCHAR(128), panstwo VARCHAR(64))");
$insertQuery = "INSERT INTO PrzykladowaTabela (imie, nazwisko, miasto, panstwo) VALUES ('Artem', 'Kravchuk', 'Częstochowa', 'Polska'),('Alla', 'Lvova', 'Częstochowa', 'Polska' )";
mysqli_query($con, $insertQuery);
mysqli_close($con);
echo ("tabela zrobiona");
?>

</body>
</html>
