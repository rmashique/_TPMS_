<?php
   include "connection.php";
   include "navbar_fac.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Faculty Login</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
  
   .child{
       text-align: center;
       margin-top: 120px;
   }
   .login{
       background-image: url(img/6.jpg);
   }

</style>
</head>
<body>
<!---------------------header-------------------------->

<!---------------------------home------------------------------>
<section class="login" id="login">

   <div class="container">
       <div class="child" id="child1">
        <h2>Faculty Login Form</h2> <br>
        <form action="" method="post">
         <b><span>Faculty ID:</span></b>
         <input type="text" name="fa_id" placeholder="Enter faculty ID" class="box" required>
         <b><span>Faculty Password:</span></b>
         <input type="password" name="password" placeholder="Enter your password" class="box" required>
         <input type="submit" value="submit" name="submit" class="link-btn">
         <br> <br>
         
         <br>
        </form>

        </div>


 </div>
</section>


<!-------------------------------------------------------php------------------------------------------------>     
               
<?php

if(isset($_POST['submit']))
{
   $fa_id = mysqli_real_escape_string($conn, $_POST['fa_id']);
   $fa_name = mysqli_real_escape_string($conn, $_POST['fa_name']);
   $count=0;
   $res=mysqli_query($conn,"SELECT * FROM `faculty` WHERE fa_id='$_POST[fa_id]' && password='$_POST[password]';");
   $row=mysqli_fetch_assoc($res);
   $count=mysqli_num_rows($res);

   if($count==0)
   {
      ?>
      <!--
         <script type="text/javascript">
            alert("The id and password doesn't match.");
         </script>
      -->
      <div class="alert alert-danger" style="width:500px; margin-left: 514px; margin-top: -650px; color:#ff120d;text-align: center;font-size: 15px;">
         <strong>
            Faculty Name and password doesn't match.
         </strong>
      </div>
      <?php
   }
   else
   {
      $_SESSION['login_user'] = $_POST['fa_id'];
      
      ?>
         <script type="text/javascript">
            window.location="index_fac.php"
         </script>
         
      <?php
   }

}

?>
<!-------------------------------------------------------php------------------------------------------------>
     





<script src="script.js"></script>
</body>
</html>