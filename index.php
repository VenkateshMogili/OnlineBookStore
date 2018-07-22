<?php
session_start();
error_reporting(0);
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online BookStore</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/vfont/css/font-awesome.min.css">
  </head>
<body>
<nav class="navbar navbar-inverse" style="border-radius:0px;background-color:#191970;border:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" style="color:white;font-family:georgia;font-size:30px;">Online BookStore</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="" style="margin:5px;">Home</a></li>
        <li><a href="#"><input type="text" placeholder="Search a keyword" class="form-control" style="width:400px;" id="keyword"></a></li>
        <li><a href="#"><button class="btn btn-info" id="search" data-pages="2">Search</button></a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION['stuid']))
        {
          $stu=$_SESSION['stuid'];
        if(mysqli_fetch_array(mysqli_query($con,"SELECT * FROM users where stuid='$stu' and category='admin'")))
        {
          ?>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">View Profile</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#" onclick="load_page('Adminv.php')">Upload Video</a></li>
            <li><a href="logout.php">Logout</a></li> 
          </ul>
        </li>
        <?php
        }
        else{
          ?>
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $stu;?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">View Profile</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="logout.php">Logout</a></li> 
          </ul>
        </li>
          <?php
        }
      }
        else{
          ?>
        <li><a href="#" onclick="load_page('register.php');"><span class="fa fa-user"></span> Register</a></li>
        <li><a href="#" onclick="load_page('login.php');"><span class="fa fa-unlock"></span> Login</a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<!--Body-->
<div class="col-md-12" id="vcontent">
  <ul id="vcontents">
<li>
  1.
</li>
  </ul>
  <div class="col-md-5">
  <img src="images/icon.jpg" style="height:500px;">
</div>
<div class="col-md-4">
  </div>
<div class="col-md-3" style="box-shadow:1px 2px 3px lightgray;height:500px;overflow:auto;">
  <center><h3 style="border-bottom:3px solid orange;">Updates</h3></center>
  <li>1.This is new update.</li>
</div>
</div>
<div style="position:fixed;bottom:0%;left:0%;width:100%;background-color:teal;padding:10px;">
  <center><b style="color:white;font-family:lucida sans;">&copy;Developer Names</b></center>
  </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>