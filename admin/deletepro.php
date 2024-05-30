<?php
include('../partials/connect.php');

$newid = $_GET['del_id'];
$sql = "DELETE FROM products where id='$newid'";
$result = mysqli_query($connect,$sql);
if ($result) {
    header('location:productsshow.php');
    # code...
} else {
    echo "not delete";

    # code...
}


?>