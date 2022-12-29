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
   <title>Student Registration</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
   <style type="text/css">
  
   .child{
       text-align: center;
       margin-top: 40px;
   }

</style>
</head>
<body>

<!---------------------------home------------------------------>
<section class="login" id="login">

   <div class="container">
       <div class="child" id="child1">
       <h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">Student Registration Form <i class="fa-regular fa-id-card"></i></h3>
           <form action="" method="post">
            <b><span>Student name:</span></b>
            <input type="text" name="st_name" placeholder="Enter your name" class="box" required>
            <b><span>Student ID:</span></b>
            <input type="number" name="st_id" placeholder="Enter your ID" class="box" required>
            <b><span>Student email:</span></b>
            <input type="email" name="st_email" placeholder="Enter your email" class="box" required>
            <b><span>Student Contact No.:</span></b>
            <input type="varchar" name="contact" placeholder="Enter your contact no." class="box" required>
            <b><span>Student Password:</span></b>
            <input type="password" name="password" placeholder="Enter your password" class="box" required>
            <input type="submit" value="submit" name="submit" class="link-btn">
            <br> <br>
            <h3>Already have an account? <a href="student_login.php">Sign In</a></h3>
            <br>
           </form>

        </div>


   </div>
</section>

<?php
   if(isset($_POST['submit']))
   {
      $count=0;
      $sql="SELECT st_id from student";
      $res=mysqli_query($conn,$sql);
      $st_name=mysqli_real_escape_string($conn,$_POST['st_name']);
      $st_id=mysqli_real_escape_string($conn,$_POST['st_id']);
      $st_email=$_POST['st_email'];
      $contact=$_POST['contact'];
      $password=$_POST['password'];

      while($row=mysqli_fetch_assoc($res))
      {
         if($row['st_id']==$_POST['st_id']) 
         {
            $count++;
         }
      }
      if($count==0){
         $insert = mysqli_query($conn, "INSERT INTO `student` (st_name,st_id,st_email,contact,password) VALUES ('$st_name','$st_id','$st_email','$contact','$password')") or die('query failed');
         if($insert)
         {
            ?>

            <script type="text/javascript">
               alert("Registration Successful");
               window.location="student_login.php"
            </script>
<?php
         }
      }
      else
      {
         ?>
         <script type="text/javascript">
               alert("Student ID already exists. Sign In.");
               window.location="student_login.php"
            </script>

            <?php
      }
   }
 
?>



<script src="script.js"></script>
</body>
</html>