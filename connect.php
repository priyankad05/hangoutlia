<?php
   include 'order.html';
   include 'dbconnect.php';
   if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $rname = mysqli_real_escape_string($conn, $_POST['rname']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);

   
   
   
   
    $query = "insert into user(name,email,number,restname,address) values('$name','$email','$number','$rname','$address')";
    $iquery = mysqli_query($conn,$query);
   
    
    if($query)
    {
       ?>
       <script>
       alert("Your table has been booked in the Restuarant!");
       location.replace("website.php");
       </script>
       <?php
    }
 else
 {
   ?>
   <script>
   alert(" insertion unsuccessful");
   </script>
   <?php
 }
    
    
   }
   
  
?>