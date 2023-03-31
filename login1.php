
<?php
   include 'login1.html';
   include 'dbconnect.php';
   if(isset($_POST['login'])){
    $user = $_POST['user'];
    $password =$_POST['password'];
  

    $name_search = "select * from signup where name='$user'";
    $query = mysqli_query($conn,$name_search);

    $name_count = mysqli_num_rows($query);

    if($name_count){
        
            

            $pass=mysqli_fetch_assoc($query);          
            $dbpass = $pass['password'];

            $password_decode = password_verify($password,$dbpass);

        if($password_decode){
              
              ?>
              <script>
                alert("Login Successful");
                location.replace("website.php");
              </script>
              <?php
        }else{
            ?>
              <script>
                alert("Password incorrect");
              </script>
              
              <?php
        }
    }else{
        ?>
              <script>
                alert("Invalid username");
                
              </script>
              <?php
    }
   }
?>