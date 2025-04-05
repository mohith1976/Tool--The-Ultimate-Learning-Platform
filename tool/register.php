<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


{
$mail = new PHPMailer(true);




try {
	$mail->SMTPDebug = 0;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com;';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'mohith.nakka982@gmail.com';				
	$mail->Password = 'fpzjtdnopposbjfp';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom ($email);		
	$mail->addAddress('mohith.nakka982@gmail.com');
	$mail->addReplyto ($email);

	
	$mail->isHTML(true);								
	$mail->Subject = 'TOOLs College Setup';
	$mail->Body = ' <b>lease press on the link and go for the next process. ';
	$mail->AltBody = 'please press on the link and go for the next process.';
	$mail->send();
	echo '<script language="javascript">';
    echo 'alert("Mail has been sent successfully!,Please check your mail inbox for next process.Pleasewait,you will be redirected to your mail in 3,2,1..")';
    echo '</script>';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}	
}

?>
<?php

$conn = mysqli_connect('localhost','root','','otpmail') or die('connection failed');





if(isset($_POST['submit'])){

   $firstName = $_POST['firstName'];
   $lastName = $_POST['lastName'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   
   
 $check_email_query="select * from register WHERE email='$email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $email is already exist in our database, Please try another one!')</script>"; 
header('refresh:0.1;url=register.php'); 
exit();  
    }
      else{
         $insert = mysqli_query($conn, "INSERT INTO `register`(firstName, lastName, email, password) VALUES('$firstName', '$lastName', '$email', '$password')") or die('query failed');

         
            $message[] = 'registered successfully!';
              

			
      }
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tool-The ultimate online learning platform</title>
  <link rel="icon" type="image/x-icon" href="mutta.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
     
  </style></head>
  <body>
  <div class="form-container">

   <form action="register.php" method="post" enctype="multipart/form-data">
      
     
      <div class="form-group">
		     <label for="firstName">First Name:</label>
			 <input type="text" class="form-control" id="firstName" placeholder=" Name" name="firstName"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
			 <div class="form-group">
		     <label for="lastName">Last Name:</label>
			 <input type="text" class="form-control" id="lastName" placeholder="Name" name="lastName"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
		     
		     <div class="form-group">
		     <label for="email">Email:</label>
			 <input type="email" class="form-control" id="email" placeholder="enter email" name="email"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
			  <div class="form-group">
		     <label for="password">Password:</label>
			 <input type="password" class="form-control" id="password" placeholder="Password" name="password"required/>
			 <div class="invalid-feedback">Please fill out this field.
			 </div>
		     </div>
			 
		  
</div>
<div class="container text-center">		  
	       <input type="submit" name="submit" value="Register"class="btn hub" />
		   </div></form>
      
      
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>


</body>
</html>