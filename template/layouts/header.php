<?php

require_once($_SERVER['DOCUMENT_ROOT']."//tsu/action/auth/login.php");
$base_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$start_url = "http://" . $_SERVER['SERVER_NAME'] . "/tsu";

//echo realpath($_SERVER['DOCUMENT_ROOT']);
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#ececec;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 12px 12px;
  text-decoration: none;
  font-size: 16px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.temps{
width:90%;margin:0 auto;
}

.temps th{
    background-color:#1b3953;
    color:white;
    text-align:center;
    padding:0.2em;
}

.temps td{
    padding:0.2em;
    border-bottom:1px dashed #dadadae5;
}

.msg{
  padding:0.5em;border:3px solid red;background-color:#CCFFFF;color:red;margin:0 auto;width:100%;text-align:center;margin-top:10px;
}

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="<?=$start_url;?>" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <?php if(isset($_SESSION["auth"])==true){ ?>
  <a href="<?=$start_url;?>?auth=logout" style="float:right;">logout</a>
  <?php }else{ ?>
  <a href="#about" style="float:right;" data-toggle="modal" data-target="#login">login</a>
  <a href="#about" style="float:right;" data-toggle="modal" data-target="#register">register</a>  
  <?php  } ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="display: flex;flex-direction: column;min-height:100px;background-color:#c13f25">
<div class="container" style="margin-top: auto;">    

<div class="row" style="padding:0.5em;color:white;border:1px solid #666;background-color:#b13922;">
  <table style="width:120px;" ><tr>
    <?php if(isset($_SESSION["auth"])==true){ ?>
      <td>
      <a href="<?=$start_url;?>?auth=logout" style="color:white;">logout</a>
      </td>
    <?php }else{ ?>
    <td style="border-right:1px solid white;">
      <a href="<?=$start_url;?>" style="color:white;">login</a>
    </td>
    <td style="padding-left:10px;"><a href="<?=$start_url;?>/template/auth/register.php" style="color:white;">register</a></td>
    <?php  } ?>
  </tr>
</table>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form method="post" action="">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
    <label class="control-label col-sm-2 col-md-12" for="isbn">username:</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2" for="title">password:</label>
    <div class="col-sm-12">
      <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
    </div>
</div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="btn_login" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form method="post" action="<?=$base_url;?>action/books/delete.php">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input id="hdnid2" name="hdnid2" type="text">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
