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
$id =$_GET['pro_id'];
$sql = "SELECT * FROM products WHERE id='$id'";
$reult = $connect->query($sql);

$final = $reult->fetch_assoc();

?>
<H3>Name:<?php echo $final['name']?></H3><br><hr>
<H3>Price:<?php echo $final['price']?></H3><br><hr>
<H3>Description:<?php echo $final['description']?></H3><br><hr>
<img src="../<?php echo $final['picture']?>" alt="no file" style="height: 300px; width: 300px; " >

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
