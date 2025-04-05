  <?php
include 'Db_conection.php';
if(isset($_POST['iaddmaths'])){

   $exam_number= mysqli_real_escape_string($conn, $_POST['exam_number']);
   
   
   $iquestion_title = $_FILES['iquestion_title']['name'];
   $mohit="./iquestion_title_img/".$iquestion_title;
   $mohiths="iquestion_title_img/".$iquestion_title;
   

   $ioption_1=$_FILES["ioption_1"]["name"];
   $mohi="./ioption_1_img/".$ioption_1;  
 $mohith="ioption_1_img/".$ioption_1;
   

   $ioption_2 = $_FILES['ioption_2']['name'];
   $mohim="./ioption_2_img/".$ioption_2;
   $mohithsr="ioption_2_img/".$ioption_2;
   

   $ioption_3 = $_FILES['ioption_3']['name'];
   $mohin="./ioption_3_img/".$ioption_3;
   $mohithsri="ioption_3_img/".$ioption_3;
 
   
   $ioption_4 = $_FILES['ioption_4']['name'];
   $mohis="./option_4_img/".$ioption_4;
   $mohithsrin="option_4_img/".$ioption_4;
   
   $answer_option = $_FILES['answer_option']['name'];
   $mohid="./answer_option_img/".$answer_option;
   $mohithsrina="answer_option_img/".$answer_option;
   
   
   
   
   
   
   
   $check_question_query="select * from online_exam_table WHERE exam_number='$exam_number'";  
    $run_query=mysqli_query($conn,$check_question_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
       $insert = mysqli_query($conn, "INSERT INTO `question`(exam_number, question_title, option_1, option_2, option_3, option_4, answer_option) VALUES('$exam_number', '$mohiths', '$mohith', '$mohithsr', '$mohithsri', '$mohithsrin', '$mohithsrina')") or die('query failed');
         if($insert){
            move_uploaded_file($_FILES["ioption_1"]["tmp_name"],$mohi);
			move_uploaded_file($_FILES["iquestion_title"]["tmp_name"],$mohit);
			move_uploaded_file($_FILES["ioption_2"]["tmp_name"],$mohim);
			move_uploaded_file($_FILES["ioption_3"]["tmp_name"],$mohin);
			move_uploaded_file($_FILES["ioption_4"]["tmp_name"],$mohis);
			move_uploaded_file($_FILES["answer_option"]["tmp_name"],$mohid);
            echo "<script>alert('question added to exam  successfully .. for more questions press add button again and again!' ) </script>";
            header('refresh:0.1;url=question1.php');
         }else{
            echo ' failed!';
         }
	}
	  
}


if(isset($_POST['iaddphy'])){

   $exam_number= mysqli_real_escape_string($conn, $_POST['exam_number']);
   
   
   $iquestion_title = $_FILES['iquestion_title']['name'];
   $iquestion_title1 = "iquestion_title_img/".$iquestion_title;
   $iquestion_title_size = $_FILES['iquestion_title']['size'];
   $iquestion_title_tmp_name = $_FILES['iquestion_title']['tmp_name'];
   $iquestion_title_folder = './iquestion_title_img/'.$iquestion_title;
   
 
   $ioption_1 = $_FILES['ioption_1']['name'];
    $ioption_11 = "ioption_1_img/".$ioption_1;
   $ioption_1_size = $_FILES['ioption_1']['size'];
   $ioption_1_tmp_name = $_FILES['ioption_1']['tmp_name'];
   $ioption_1_folder = './ioption_1_img/'.$ioption_1;
   
   
   $ioption_2 = $_FILES['ioption_2']['name'];
$ioption_21= $mohithsr="ioption_2_img/".$ioption_2;
   $ioption_2_size = $_FILES['ioption_2']['size'];
   $ioption_2_tmp_name = $_FILES['ioption_2']['tmp_name'];
   $ioption_2_folder = './ioption_2_img/'.$ioption_2;
   
   
   $ioption_3 = $_FILES['ioption_3']['name'];
$ioption_31 = "ioption_3_img/".$ioption_3;
   $ioption_3_size = $_FILES['ioption_3']['size'];
   $ioption_3_tmp_name = $_FILES['ioption_3']['tmp_name'];
   $ioption_3_folder = './ioption_3_img/'.$ioption_3;
   
   
   
   
   $ioption_4 = $_FILES['ioption_4']['name'];
$ioption_41 ="option_4_img/".$ioption_4;
   $ioption_4_size = $_FILES['ioption_4']['size'];
   $ioption_4_tmp_name = $_FILES['ioption_4']['tmp_name'];
   $ioption_4_folder =  './option_4_img/'.$ioption_4;
   

 
   $answer_option = $_FILES['answer_option']['name'];
   $mohid="./answer_option_img/".$answer_option;
   $mohithsrina="answer_option_img/".$answer_option;
    

    
   
   
   $check_question_query="select * from online_exam_table WHERE exam_number='$exam_number'";  
    $run_query=mysqli_query($conn,$check_question_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
       $insert = mysqli_query($conn, "INSERT INTO `phyquestion`(exam_number, question_title, option_1, option_2, option_3, option_4, answer_option) VALUES('$exam_number', '$iquestion_title1', '$ioption_11', '$ioption_21', '$ioption_31', '$ioption_41', '$mohithsrina')") or die('query failed');
         if($insert){
            move_uploaded_file($iquestion_title_tmp_name, $iquestion_title_folder);
			move_uploaded_file($ioption_1_tmp_name, $ioption_1_folder);
			move_uploaded_file($ioption_2_tmp_name, $ioption_2_folder);
			move_uploaded_file($ioption_3_tmp_name, $ioption_3_folder);
			move_uploaded_file($ioption_4_tmp_name, $ioption_4_folder);
			move_uploaded_file($_FILES["answer_option"]["tmp_name"],$mohid);
            echo "<script>alert('question added to exam  successfully .. for more questions press add button again and again!' ) </script>";
            header('refresh:0.1;url=question1.php');
         }else{
            echo ' failed!';
         }
	}
	  
}




if(isset($_POST['iaddche'])){

	  
$exam_number= mysqli_real_escape_string($conn, $_POST['exam_number']);
   
   
   $iquestion_title = $_FILES['iquestion_title']['name'];
   $iquestion_title1 = "iquestion_title_img/".$iquestion_title;
   $iquestion_title_size = $_FILES['iquestion_title']['size'];
   $iquestion_title_tmp_name = $_FILES['iquestion_title']['tmp_name'];
   $iquestion_title_folder = './iquestion_title_img/'.$iquestion_title;
   
 
   $ioption_1 = $_FILES['ioption_1']['name'];
    $ioption_11 = "ioption_1_img/".$ioption_1;
   $ioption_1_size = $_FILES['ioption_1']['size'];
   $ioption_1_tmp_name = $_FILES['ioption_1']['tmp_name'];
   $ioption_1_folder = './ioption_1_img/'.$ioption_1;
   
   
   $ioption_2 = $_FILES['ioption_2']['name'];
$ioption_21= $mohithsr="ioption_2_img/".$ioption_2;
   $ioption_2_size = $_FILES['ioption_2']['size'];
   $ioption_2_tmp_name = $_FILES['ioption_2']['tmp_name'];
   $ioption_2_folder = './ioption_2_img/'.$ioption_2;
   
   
   $ioption_3 = $_FILES['ioption_3']['name'];
$ioption_31 = "ioption_3_img/".$ioption_3;
   $ioption_3_size = $_FILES['ioption_3']['size'];
   $ioption_3_tmp_name = $_FILES['ioption_3']['tmp_name'];
   $ioption_3_folder = './ioption_3_img/'.$ioption_3;
   
   
   
   
   $ioption_4 = $_FILES['ioption_4']['name'];
$ioption_41 ="option_4_img/".$ioption_4;
   $ioption_4_size = $_FILES['ioption_4']['size'];
   $ioption_4_tmp_name = $_FILES['ioption_4']['tmp_name'];
   $ioption_4_folder =  './option_4_img/'.$ioption_4;
   

 
   $answer_option = $_FILES['answer_option']['name'];
   $mohid="./answer_option_img/".$answer_option;
   $mohithsrina="answer_option_img/".$answer_option;
    

    
   
   
   $check_question_query="select * from online_exam_table WHERE exam_number='$exam_number'";  
    $run_query=mysqli_query($conn,$check_question_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
       $insert = mysqli_query($conn, "INSERT INTO `chequestion`(exam_number, question_title, option_1, option_2, option_3, option_4, answer_option) VALUES('$exam_number', '$iquestion_title1', '$ioption_11', '$ioption_21', '$ioption_31', '$ioption_41', '$mohithsrina')") or die('query failed');
         if($insert){
            move_uploaded_file($iquestion_title_tmp_name, $iquestion_title_folder);
			move_uploaded_file($ioption_1_tmp_name, $ioption_1_folder);
			move_uploaded_file($ioption_2_tmp_name, $ioption_2_folder);
			move_uploaded_file($ioption_3_tmp_name, $ioption_3_folder);
			move_uploaded_file($ioption_4_tmp_name, $ioption_4_folder);
			move_uploaded_file($_FILES["answer_option"]["tmp_name"],$mohid);
            echo "<script>alert('question added to exam  successfully .. for more questions press add button again and again!' ) </script>";
            header('refresh:0.1;url=question1.php');
         }else{
            echo ' failed!';
         }
	}
	  
}
exit();






 
    
?>