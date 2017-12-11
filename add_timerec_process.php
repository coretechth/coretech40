<?php
include './dbconfig.php';

session_start();
$name = $_POST['txtName'];
$remark = $_POST['txtRemark'];
$in = $_POST['txtTimeIn'];

$inTime = $_POST['txtDate'] . ' ' . $_POST['txtTimeIn'];
$inTime = strtotime($inTime);
$inTime= date('Y-m-d H:i:s',$inTime);

$outTime = $_POST['txtDate'] . ' ' . $_POST['txtTimeOut'];
$outTime = strtotime($outTime);
$outTime= date('Y-m-d H:i:s',$outTime);

$date1 = DateTime::createFromFormat('H:i a', $in);

if(strtotime($inTime) < strtotime($outTime)){
echo "ekrgierkgoerkgeorkopk";
}

echo $_POST['txtTimeIn'];;

$sql = "INSERT INTO time_reccord VALUES('','".$name."','".$inTime."','".$outTime."','".$remark."')";

?>
