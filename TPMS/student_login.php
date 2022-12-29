<?php
   include "connection.php";
   include "navbar_st.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Login</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
   
   div.child{
       float: center;
       box-sizing: border-box;
       text-align: center;
       padding: 10px;
       border-radius: .5rem ;
   }
   #child1{
       margin-top: 140px;
   }
   .child img{
       width: 100%;
       
       border-radius: 100rem;
       
   }

</style>
</head>
<body>

<!---------------------------home------------------------------>
<section class="login" id="login">

   <div class="container">
       <div class="child" id="child1">
       <h3 style="color:black; margin-top: 0px; font-size:2.5rem" class="heading">Student Login Form <i class="fa-solid fa-door-open"></i></h3>
<br>
           <form action="" method="post">
            <b><span>Student ID:</span></b>
            <input type="number" name="st_id" placeholder="Enter your ID" class="box" required>
            <b><span>Student Password:</span></b>
            <input type="password" name="password" placeholder="Enter your password" class="box" required>
            <input type="submit" value="submit" name="submit" class="link-btn">
            <br> <br>
            <h3>New to this Website? <a href="reg.php">Sign Up</a></h3>
            <br>
           </form>

       </div>
       


 </div>
</section>

<!-------------------------------------------------------php------------------------------------------------>     
               
<?php

if(isset($_POST['submit']))
{
   $st_id = mysqli_real_escape_string($conn, $_POST['st_id']);
   $count=0;
   $res=mysqli_query($conn,"SELECT * FROM `student` WHERE st_id='$_POST[st_id]' && password='$_POST[password]';");
   $row=mysqli_fetch_assoc($res);
   $count=mysqli_num_rows($res);

   if($count==0)
   {
      ?>
     
        <script type="text/javascript">
               alert("User id and password doesn't match");
               window.location="student_login.php"
            </script>
            <?php
      
   }
   else
   {
      $_SESSION['login_user'] = $_POST['st_id'];
      
      ?>
         <script type="text/javascript">
            window.location="profile.php"
         </script>
         
      <?php
   }

}

?>
<!-------------------------------------------------------php------------------------------------------------>
     




<script src="script.js"></script>
</body>
</html>