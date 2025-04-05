<?php
session_start();

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tool");
$online_exam_duration="";
$res=mysqli_query($link,"SELECT * FROM online_exam_table WHERE online_exam_status = 'StartExam' ");
while($row=mysqli_fetch_array($res))
{
	$online_exam_duration=$row["online_exam_duration"];
}

$_SESSION["online_exam_duration"]=$online_exam_duration;
$_SESSION["start_time"]=date("Y-m-d H:i:s");

$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["online_exam_duration"].'minutes', strtotime($_SESSION["start_time"])));

$_SESSION["end_time"]=$end_time;

?>

<script type="text/javascript">window.location="timer.php"</script>


	
	