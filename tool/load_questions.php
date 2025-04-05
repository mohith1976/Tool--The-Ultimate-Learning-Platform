<?php

session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"tool");

$question_no="";
$question_title="";
$option_1="";
$option_2="";
$option_3="";
$option_4="";
$answer_option="";
$count=0;
$ans="";
$exam_number="";







$queno=$_GET["questionno"];
if(isset($_SESSION["answer_option"][$queno]))
{
$ans=$_SESSION["answer_option"][$queno];
}







$res=mysqli_query($link,"select * from question where exam_number='$_SESSION[online_exam_table]' && questionno=$_GET[questionno]");
$count=mysqli_num_rows($res);

if ($count==0)
{
	echo "over";
}
else
{
	while($row=mysqli_fetch_array($res))
	{
		$question_no=$row["questionno"];
$question_title=$row["question_title"];
$option_1=$row["option_1"];
$option_2=$row["option_2"];
$option_3=$row["option_3"];
$option_4=$row["option_4"];
	}
}
?>


<table>
<tr>

<td style="font-weight: bold; font-size: 18px; padding-left: 50px" colspan="2">


	
<?php
      if(strpos($question_title,'iquestion_title_img/')!==false)
    {
    ?>
	 <img src="<?php echo $question_title ; ?>" height="40" width="360">
	 <?php
 
    }
else
{
	echo "( ".$question_no." )".$question_title;
}
?>







</td>
</tr>
</table>
<table>
<tr>
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $option_1; ?>" onclick="radioclick(this.value,<?php echo $question_no ?>)"
<?php
if($ans==$option_1)
{
	echo "checked";
}
?>>
</td>
<td style="padding-left: 10px">
 <?php
      if(strpos($option_1,'ioption_1_img/')!==false)
    {
    ?>
	 <img src="<?php echo $option_1 ; ?>" height="30" width="30">
	 <?php
 
    }
else
{
	echo $option_1;
}
?>
</td></tr>

<tr>
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $option_2; ?>" onclick="radioclick(this.value,<?php echo $question_no ?>)"
<?php
if ($ans==$option_2)
{
	echo "checked";
}
?>>
</td>
<td style="padding-left: 10px">
 <?php
      if(strpos($option_2,'ioption_2_img/')!==false)
    {
    ?>
	 <img src="<?php echo $option_2 ; ?>" height="30" width="30">
	 <?php
 
    }
else
{
	echo $option_2;
}
?>
</td></tr>

<tr>
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $option_3; ?>" onclick="radioclick(this.value,<?php echo $question_no ?>)"
<?php
if ($ans==$option_3)
{
	echo "checked";
}
?>>
</td>
<td style="padding-left: 10px">
 <?php
      if(strpos($option_3,'ioption_3_img/')!==false)
    {
    ?>
	 <img src="<?php echo $option_3 ; ?>" height="30" width="30">
	 <?php
 
    }
else
{
	echo $option_3;
}
?>
</td></tr>

<tr> 
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $option_4; ?>" onclick="radioclick(this.value,<?php echo $question_no; ?>)"
<?php
if ($ans==$option_4)
{
	echo "checked";
}
?>>
</td>
<td style="padding-left: 10px">
 <?php
      if(strpos($option_4,'option_4_img/')!==false)
    {
    ?>
	 <img src="<?php echo $option_4 ; ?>" height="30" width="30">
	 <?php
 
    }
else
{
	echo $option_4;
}
?>
</td>

</tr></table>

</body></html>

