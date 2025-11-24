<?php

$start_url = "http://" . $_SERVER['SERVER_NAME'] . "/tsu";
require_once($_SERVER['DOCUMENT_ROOT']."//tsu/config/db.php");

if(isset($_GET["auth"])=='logout'){
      session_destroy();
      header('Location: '.$start_url);
}

if(isset($_POST["btn_login"])){

$username=$_POST["username"];
$password=$_POST["password"];
$sql="select COUNT(*) as cnt from users where username='".$username."' and password='".md5($password)."'";

$result = $DB->query($sql)->fetch_assoc();

if($result["cnt"]>0){
$_SESSION["auth"]=true;
header('Location: '.$start_url);
}else{
header('Location: '.$start_url.'/template/auth/login.php?msg=ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');    
}

}
?>
