<!DOCTYPE html>
<html>
<?php

session_start();
if (!empty($_SESSION['email']) AND !empty($_SESSION['password'])) {

  header('location:adminindex.php');
  # code...
}
include("adminpartials/head.php");
include('../partials/connect.php');

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = "SELECT * FROM admins WHERE username= '$email' AND password= '$password'";
    $query = mysqli_query($connect,$check);
    $data = mysqli_fetch_assoc($query);

    $_SESSION['email']=$data['username'];
    $_SESSION['password']=$data['password'];

    if ($email=$data['username'] AND $password=$data['password']) {

        header('location:adminindex.php');
        # code...
    }else{
        header('location:adminlogin.php');
    }
    # code...
}




?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">




<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class=" col-xs-6">
<!-- Small boxes (Stat box) -->

  <!-- Horizontal Form -->
  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="adminlogin.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3"  class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="login" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

        </div>
    </div>
</section>