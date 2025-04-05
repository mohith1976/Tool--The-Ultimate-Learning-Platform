<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tool");
$total_que=0;
$exam_number="";

$real=mysqli_query($link,"select * from question where exam_number='$_SESSION[online_exam_table]'");
$total_que=mysqli_num_rows($real);
echo $total_que;
?>

