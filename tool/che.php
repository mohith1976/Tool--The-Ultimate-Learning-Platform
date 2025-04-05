
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
   
  
   

     $check_online_exam_title_query="select *  from some_basic_concepts_in_chemistry WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `some_basic_concepts_in_chemistry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from states_of_matter WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `states_of_matter`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from atomic_structure WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `atomic_structure`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from chemical_bonding_and_molecular_structure WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `chemical_bonding_and_molecular_structure`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from chemical_thermodynamics WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `chemical_thermodynamics`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from solutions WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `solutions`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from equilibrium WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `equilibrium`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from redox_reactions_and_electrochemistry	  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `redox_reactions_and_electrochemistry	`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from chemical_kinetics WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `chemical_kinetics`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from surface_chemistry WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `surface_chemistry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from classification_of_elements_and_periodicity_in_properties WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `classification_of_elements_and_periodicity_in_properties`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from  general_principles_and_processes_of_isolation_of_metals	WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `general_principles_and_processes_of_isolation_of_metals`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from hydrogen WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `hydrogen`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from s_block_elements	 WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `s_block_elements`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from 	p_block_elements WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `p_block_elements`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from d_and_f_block_elements  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `d_and_f_block_elements`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from 	coordination_compounds  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `coordination_compounds`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from  environmental_chemistry WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `environmental_chemistry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from purification_and_characterization_of_organic_compounds  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `purification_and_characterization_of_organic_compounds`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
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
   
  
   

     $check_online_exam_title_query="select * from some_basic_principles_of_organic_chemistry WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `some_basic_principles_of_organic_chemistry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add21'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from hydrocarbons WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `hydrocarbons`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add22'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from  organic_compounds_containing_halogens WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `organic_compounds_containing_halogens`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add23'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from  organic_compounds_containing_oxyzen WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `organic_compounds_containing_oxyzen`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add24'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from organic_compounds_containing_nitrozen  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `organic_compounds_containing_nitrozen`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add25'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from polymers WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `polymers`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add26'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from biomolecules WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `biomolecules`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add27'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from chemistry_in_everyday_life WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `chemistry_in_everyday_life`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
      
      
?>
<?php

include 'Db_conection.php';



if(isset($_POST['add28'])){
	
	 
      $question_title= mysqli_real_escape_string($conn, $_POST['question_title']);
       $option_1= mysqli_real_escape_string($conn, $_POST['option_1']);
	   $option_2= mysqli_real_escape_string($conn, $_POST['option_2']);
	   $option_3= mysqli_real_escape_string($conn, $_POST['option_3']);
	   $option_4= mysqli_real_escape_string($conn, $_POST['option_4']);
	   $answer_option= mysqli_real_escape_string($conn, $_POST['answer_option']);
   
  
   

     $check_online_exam_title_query="select * from principles_related_to_practical_chemistry  WHERE question_title='$question_title'";  
    $run_query=mysqli_query($conn,$check_online_exam_title_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Question is already exist in our database, Please try another one!')</script>"; 
 header('refresh:0.1;url=questionbank.php');
  
    }else{
         
          
        
   
   
 
     $insert = mysqli_query($conn, "INSERT INTO `principles_related_to_practical_chemistry`( question_title, option_1, option_2, option_3, option_4, answer_option) VALUES( '$question_title', '$option_1', '$option_2', '$option_3', '$option_4', '$answer_option')") or die('query failed');
      echo "<script>alert('question added successfully. for more questions press add button again and again')</script>";
	   header('refresh:0.1;url=questionbank.php');
	}
}
  
   
       
        
    exit();            
      
?>