<?php
include('../partials/connect.php');
// $id = $_POST['up_id'];
if (isset($_POST['update'])) {
   $newid =$_POST['form_id'];
   $newname = $_POST['name'];
   $newprice = $_POST['price'];
   $newdec = $_POST['description'];
   $newcat = $_POST['category_id'];
   $target ="../uploads/";
$file_path = $target.basename($_FILES['file']['name']);
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store = "../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);

$sql = "UPDATE products SET name='$newname',price='$newprice', description='$newdec',category_id='$newcat',picture='$file_path' WHERE id='$newid'";

if (mysqli_query($connect,$sql)) {
    header('location:productsshow.php');
    # code...
}else
{
    header('location:adminindex.php');
}
}



?>