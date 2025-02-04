<?php
session_start();
include('includes/config.php');

if(isset($_POST['login']))
  {
    $uname=$_POST['username'];
    $Password=md5($_POST['inputpwd']);
    $query=mysqli_query($con,"select ID,AdminuserName,UserType from tbladmin where  AdminuserName='$uname' && Password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['ID'];
      $_SESSION['uname']=$ret['AdminuserName'];
      $_SESSION['utype']=$ret['UserType'];
     header('location:dashboard.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";          
    }
  }
  ?>

<?php


if(isset($_POST['login']))
{
    $uname = $_POST['username'];
    $Password = $_POST['inputpwd'];

    // Hard-coded credentials
    $hardcoded_username = 'Abhiruchi';
    $hardcoded_password = 'Abhiruchi';

    if($uname === $hardcoded_username && $Password === $hardcoded_password){
        // Assuming ID = 5, UserType = 2 for hard-coded user (you can adjust these as needed)
        $_SESSION['aid'] = 5; 
        $_SESSION['uname'] = $hardcoded_username;
        $_SESSION['utype'] = 2;
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Invalid Details.');</script>";
    }
}
?>

<?php


if(isset($_POST['login']))
{
    $uname = $_POST['username'];
    $Password = $_POST['inputpwd'];

    // Hard-coded credentials
    $hardcoded_username = 'Suprabath';
    $hardcoded_password = 'Suprabath';

    if($uname === $hardcoded_username && $Password === $hardcoded_password){
        // Assuming ID = 5, UserType = 2 for hard-coded user (you can adjust these as needed)
        $_SESSION['aid'] = 5; 
        $_SESSION['uname'] = $hardcoded_username;
        $_SESSION['utype'] = 2;
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Invalid Details.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurent Table Reservation System | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../index.php" class="h1"><b>Admin</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in</p>

      <form  method="post">
        <label> Username: </label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username"  required>
          <div class="input-group-append">
            
          </div>
        </div>
        <label> Password: </label>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="inputpwd"  required>
          <div class="input-group-append">
            
          </div>
        </div>
        <div class="row">
          <div class="col-8">
   
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>