
<?php
$start_url = "http://" . $_SERVER['SERVER_NAME'] . "/tsu";
require_once("./../db.php");

if(isset($_POST["btn_submit"])){

$sql = "insert into books set isbn = '".$_POST["isbn"]."',
title ='".$_POST["title"]."',
author='".$_POST["author"]."',
publisher='".$_POST["publisher"]."',
image='".$_POST["image"]."',
year=".$_POST["year"]."";
echo $sql;
$result = $DB->query($sql);

if($result){
 header('Location: '.$start_url);
}else{
    echo "fail:".$mysqli->error;
}

}

?>