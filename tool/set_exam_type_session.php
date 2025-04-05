<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tool");

$exam_name=$_GET["online_exam_table"];
$_SESSION["online_exam_table"]=$exam_name;
$res=mysqli_query($link,"select * from online_exam_table where exam_number='$exam_name'");
while($row=mysqli_fetch_array($res))
{
	$_SESSION["exam_time"]=$row["online_exam_duration"];
}
date_default_timezone_set('Asia/kolkata');
$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date. "+$_SESSION[exam_time] minutes"));
$_SESSION["exam_start"]="yes";





?>