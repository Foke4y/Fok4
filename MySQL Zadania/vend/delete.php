<?php
require_once '../config/conn.php';
global $con;
$id = $_GET['id'];



mysqli_query($con, "DELETE FROM `zam` WHERE `zam`.`id` = $id");
header('Location: Zad5-8.php');