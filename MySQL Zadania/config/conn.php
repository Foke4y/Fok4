<?php
$con = mysqli_connect('localhost', 'root', '', 'zadanie');
if(!$con) {
    die("error");
}
$zam = mysqli_query($con, "SELECT * FROM `zam`");

$zam = mysqli_fetch_all($zam, MYSQLI_ASSOC);
