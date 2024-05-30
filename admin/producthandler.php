<?php
include('../partials/connect.php');

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category_id = $_POST['category_id'];

$target ="uploads/";
$file_path = $target.basename($_FILES['file']['name']);
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store = "../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);

$insert = "INSERT INTO products(name,price,picture,description,category_id)VALUES ('$name','$price','$file_path','$description','$category_id')";
// $query = mysqli_query($insert,$connect);

$connect->query($insert);

?>