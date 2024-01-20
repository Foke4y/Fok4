<?php
$con = mysqli_connect("localhost", "root", "", "test");

$query = "SELECT users.id, users.name, users.surname, orders.id, orders.amount AS order_id, orders.user_id, orders.created 
          FROM orders 
          INNER JOIN users ON users.id = orders.user_id";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($tabela = mysqli_fetch_assoc($result)) {
        echo "ID: " . $tabela["id"]. '<br>' . ", Imię: " . $tabela["name"]. '<br>' . ", Nazwisko: " . $tabela["surname"]. '<br>' .
            ", Cena Zamówienia:" . $tabela["order_id"]. '<br>' . ", Data Utworzenia: " . $tabela["created"]. '<br>' . "<br>";
    }
} else {
    echo "Brak wyników";
}

mysqli_close($con);

