
<?php 
require_once("./../../action/auth/register.php");
require_once($_SERVER['DOCUMENT_ROOT']."//tsu/template/layouts/header.php"); 
?>

<div class="container">
<div class="row" style="background-color:white;padding:1em;min-height:1000px;">

<form class="form-horizontal" method="post" action="./register.php" style="width:100%;">
<div class="col-sm-12 col-md-6" style="border:1px solid gray;margin:0 auto;">

<br>
  <center><h1>Register</h1></span></center>

<div class="form-group">
    <label class="control-label col-sm-2 col-md-12">fullname:</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="fullname" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2 col-md-12">email:</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2 col-md-12">phone:</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" required>
    </div>
</div>

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

 <center><input type="submit" class="btn btn-info" name="btn_submit" value="ลงทะเบียน"></center>
<br><br>
</div>
</form>
</div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."//tsu/template/layouts/bottom.php");   ?>
