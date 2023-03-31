<?php
   include 'signup.html';
   include 'dbconnect.php';
   if(isset($_POST['signup'])){
   $user = mysqli_real_escape_string($conn, $_POST['user']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
   $pass=password_hash($password,PASSWORD_BCRYPT); 
   $cpass=password_hash($password,PASSWORD_BCRYPT);
   
   
   
    $query = "insert into signup(name,password,conpass) values('$user','$pass','$cpass')";
    $iquery = mysqli_query($conn,$query);
   
    
    if($query)
    {
       ?>
       <script>
       alert("Your account is successfully created!");
       location.replace("login1.php");
       </script>
       <?php
    }
 else
 {
   ?>
   <script>
   alert("Please try again!");
   </script>
   <?php
 }
    
    
   }
   
  
?>