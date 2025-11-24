<?php
$start_url = "http://" . $_SERVER['SERVER_NAME'] . "/tsu";
require_once($_SERVER['DOCUMENT_ROOT']."//tsu/config/db.php");

//echo "register";
if(isset($_POST["btn_submit"])){
$fulname=$_POST["fullname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$username=$_POST["username"];
$password=$_POST["password"];

$sql="insert into users set fullname='".$fulname."',
email='".$email."',
phone='".$phone."',
username='".$username."',
password='".md5($password)."'";

//echo $sql;
$result = $DB->query($sql);

if($result){
 header('Location: '.$start_url."?msg=การสมัครเสร็จสมบูรณ์");
}else{
    echo "fail:".$mysqli->error;
}
}
?>