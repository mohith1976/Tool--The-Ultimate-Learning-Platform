<?php
session_start();
$date=date("y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s", strtotime($date."+ $_SESSION[exam_time] minutes"));
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tool");
?>

<div class="row" style="...">

<div class="col-lg-6 col-lg-push-3" style="">

<?php

$correct=0;
$wrong=0;
$un=0;
if(isset($_SESSION["answer_option"]))
{
	for($i=1;$i<=sizeof($_SESSION["answer_option"]);$i++)
	{
		$answer="";
		$res=mysqli_query($link,"select * from question where exam_number='$_SESSION[online_exam_table]' && questionno=$i");
		while($row=mysqli_fetch_array($res))
		{
			$answer=$row["answer_option"];
		}
		if(isset($_SESSION["answer_option"][$i]))
		{
			if($answer==$_SESSION["answer_option"][$i])
			{
				$correct=$correct+1;
			}
			else{
			    $wrong=$wrong+1;
			}
		}
		else{
			echo "BOOM";
		}
	}
}
$count=0;
$res=mysqli_query($link,"select * from question where exam_number='$_SESSION[online_exam_table]'");
$count=mysqli_num_rows($res);
$wrong=$count-$correct;
echo "<br>";
echo "<br>";
echo "<center>";
echo "Total Questions=".$count;
echo "<br>";
echo "Correct Answers=".$correct;
echo "<br>";
echo "Wrong Answers=".$wrong;
echo "</center>";


?>
</div>
</div>
<?php
if(isset($_SESSION["exam_start"]))
{
	$date=date("Y-m-d");
	mysqli_query($link,"insert into exam_results(id,username,exam_number,total_question,correct_answer,wrong_answer,exam_time)values(NULL,'$_SESSION[username]','$_SESSION[online_exam_table]','$count','$correct','$wrong','$date')");
}
if(isset($_SESSION["exam_start"]))
{
	unset($_SESSION["exam_start"]);
	?>
	<script type="text/javascript">
	window.location.href = userlogin.php;

	</script>
	<?php
}
?>