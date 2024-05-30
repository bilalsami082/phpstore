<?php
session_start();
if (empty($_SESSION['cart'])) {
    $_SESSION['cart']=array();
    # code...
}
array_push($_SESSION['cart'],$_GET['cart_id']);


?>
<p>addition successful <a href="cartview.php">cart view</a></p>