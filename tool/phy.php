
<?php

include 'Db_conection.php';

session_start();

if(isset($_POST['add'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select *  from physics_and_measurement WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `physics_and_measurement`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add2'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from kinematics WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `kinematics`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add3'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from laws_of_motion WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `laws_of_motion`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add4'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from work_energy_and_power WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `work_energy_and_power`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add5'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from rotational_motion WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `rotational_motion`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add6'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from gravitation WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `gravitation`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add7'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from properties_of_solids_and_liquids WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `properties_of_solids_and_liquids	`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add8'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from thermodynamics  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `thermodynamics`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';


if(isset($_POST['add9'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from kinetic_theory_of_gases WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `kinetic_theory_of_gases`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add10'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from oscillations_and_waves WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `oscillations_and_waves`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add11'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from electrostatics WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `electrostatics`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php 

include 'Db_conection.php';



if(isset($_POST['add12'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from current_electricity  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `current_electricity`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add13'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from magnetic_effects_of_current_and_magnetism WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `magnetic_effects_of_current_and_magnetism`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add14'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from electromagneticinduction_and_alternating_currents WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `electromagneticinduction_and_alternating_currents`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php 

include 'Db_conection.php';



if(isset($_POST['add15'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from 	electromagnetic_waves WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `electromagnetic_waves`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';


if(isset($_POST['add16'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from optics WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `optics`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add17'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from dual_nature_of_matter_and_radiation WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `dual_nature_of_matter_and_radiation`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';


if(isset($_POST['add18'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from atoms_and_nuclei WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `atoms_and_nuclei`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add19'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from electronic_devices WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `electronic_devices`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
          
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add20'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from communication_systems WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `communication_systems`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
 exit();         
      
      
?>