<?php
$start_url = "http://" . $_SERVER['SERVER_NAME'] . "/tsu";
require_once($_SERVER['DOCUMENT_ROOT']."//tsu/config/db.php");

$para = "";

if(isset($_GET["id"])){

$sql = "select * from books where id=".$_GET["id"]."";
$para = $DB->query($sql)->fetch_assoc();

}

?>