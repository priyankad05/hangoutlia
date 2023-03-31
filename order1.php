<?php
$servername="localhost";
$username="root";
$password="";
$database = "myorder";

$conn=new mysqli($servername,$username,$password,"$database");

$name="";
$email="";
$phone="";
$address="";

$errorMessage="";
$successMessage="";


if ($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];

do{
    if( empty($name)||empty($email)||empty($phone)||empty($address) ){
        $errorMessage="All the fields are required";
        break;
    }
    //add client
    $sql= "INSERT INTO clients (name, email, phone, address)"."VALUES('$name','$email','$phone','$address')";
    $result=$conn->query($sql);
    if(!$result){
        $errorMessage="Invalid query" . $conn->error;
        break;
    }


$name="";
$email="";
$phone="";
$address="";

$successMessage="Clients Added";


}
while(false);
}
?>
<html>
    <body>
    <link rel="stylesheet" href="order.css">
<h1 class="heading">
         <span>Book your table</span>Now
      </h1>
      <div class="row">
         <div class="image">
         <img src="img/oderrrr.jpg" alt="">
         </div>
   
         <form method="post">
   
            <div class="inputBox">
            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $name; ?>">
            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $phone; ?>">
            <input type="text" class="form-control" name="address" placeholder="Restuarant Name" value="<?php echo $address; ?>">
            

<div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    


            </div> 
   
   
            

         
   
         </form>
      </div>
</body>

</html>
