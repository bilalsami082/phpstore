<!DOCTYPE html>
<html>
<?php
include("adminpartials/session.php");
include("adminpartials/head.php");
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 
<?php
include("adminpartials/header.php");
include("adminpartials/aside.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class=" col-xs-6">
<!-- start-->

<?php
include('../partials/connect.php');
$sql = "SELECT * FROM products";
$result = $connect->query($sql);
while($final=$result->fetch_assoc()){

?>
<a href="proshow.php?pro_id=<?php echo $final['id']?>">
<h3><?php echo $final['id']?>:<?php echo $final['name'] ?></h3><br>
</a>
<a href="proupdate.php?up_id=<?php echo $final['id'];?>">
<button type="submit" name="update" >Update</button>
</a>
<a href="deletepro.php?del_id=<?php echo $final['id'];?>">
<button type="submit" name="delete" >Delete</button>
</a><hr>
<?php
}?>

<!-- end code -->
        </div>
     </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
include("adminpartials/footer.php");
?>
</body>
</html>
