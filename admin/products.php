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
<!-- Small boxes (Stat box) -->



          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="producthandler.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter category">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Price</label>
                  <input type="text" name="price" class="form-control" id="" placeholder="Price" >
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Pictuer</label>
                  <input type="file" name="file" id="exampleInputFile">

                  
                  <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea type="text" name="description" rows="10" class="form-control" id="" placeholder="description" ></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Select Category</label>
                  <select name="category_id" id="category_id">
                    <?php

                    include('../partials/connect.php');
                    $cat = "SELECT * FROM categories";
                    $result = mysqli_query($connect,$cat);
                    while ($row =mysqli_fetch_assoc($result)) {
                  echo  "<option value=".$row['id'].">".$row['name']."</option>";

                      # code...
                    }
                    ?>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
<!-- Small boxes (Stat box) -->
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