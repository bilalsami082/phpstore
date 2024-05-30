<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
</tr>
<tr>
    <?php
    include ('partials/connect.php');
    $sql = "SELECT * FROM products";
    $query = $connect->query($sql);
    while($final=$query->fetch_assoc()){;
    ?>
    <td><?php echo $final['id']?></td>
    <td><?php echo $final['name']?></td>
    <td><?php echo $final['price']?></td>
    <td><a href="demoview.php?cart_id=<?php echo $final['id']?>">
    <button>add to cart</button>
</a></td>
</tr>
<?php
}?>
</table>