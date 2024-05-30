<?php
include('../partials/connect.php');

$category = $_POST['name'];

$insert = "INSERT INTO categories(name)VALUES ('$category')";
// $query = mysqli_query($insert,$connect);

$connect->query($insert);

?>