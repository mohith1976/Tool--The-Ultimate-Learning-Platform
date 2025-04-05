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
   
  
   

     $check_online_exam_title_query="select * from sets_relation WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `sets_relation`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from complex_numbers_quadratic_numbers WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `complex_numbers_quadratic_numbers`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from matrices_and_determinants WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `matrices_and_determinants`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from permutations_and_combinations WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `permutations_and_combinations`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from mathematical_induction WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `mathematical_induction`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from binomial_theorem_its_simple_applications WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `binomial_theorem_its_simple_applications`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from sequences_and_series WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `sequences_and_series`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from limits_continuity_and_differentiability WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `limits_continuity_and_differentiability`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from integral_calculus WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `integral_calculus`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from differential_calculus WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `differential_calculus`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from coordinate_geometry WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `coordinate_geometry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from three_dimensional_geometry WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `three_dimensional_geometry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from vector_algebra WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `vector_algebra`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from statistics_probability WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `statistics_probability`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from trigonometry WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `trigonometry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from mathematical_reasoning WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `mathematical_reasoning`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
 exit();  
   
       
          
      
      
?>
