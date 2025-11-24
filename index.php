<?php
session_start();
if(isset($_SESSION["auth"])==true){
    require_once($_SERVER['DOCUMENT_ROOT']."//tsu/template/master.php");
}else{
    require_once($_SERVER['DOCUMENT_ROOT']."//tsu/template/auth/login.php");
}
//require_once("./template/auth/login.php");
//require_once("./template/master.php");
?>
  