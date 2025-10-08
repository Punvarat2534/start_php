<?php
$start_url = "http://" . $_SERVER['SERVER_NAME'] . "/tsu";
require_once("./../../db.php");

$para = "";

if(isset($_POST["hdnid"])){

$sql = "delete from books where id=".$_POST["hdnid"]."";
$para = $DB->query($sql);
header('Location: '.$start_url);

}
echo "delete success";
//

?>