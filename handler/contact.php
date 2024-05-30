<?php
include('../partials/connect.php');

$email = $_POST['email'];
$msg = $_POST['msg'];
$insert = "INSERT INTO contact(email,msg)VALUES ('$email','$msg')";
// $query = mysqli_query($insert,$connect);

$connect->query($insert);

?>