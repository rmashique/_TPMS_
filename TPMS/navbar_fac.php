<?php
	session_start();
    include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thesis Practicum Management System</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styleS.css">
   <style type="text/css">
   .welcome a{
      box-shadow: inset 0 0 0 0 #fff;
      margin: 0 -.25rem;
      padding: 0 .25rem;
      transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
      font-weight: 700;
      text-shadow: 2px 2px 5px #00d3fe;
}
.welcome a:hover{
    box-shadow: inset 0 0 0 0 #fff;
    color: black;
    
}
.sig a{
      box-shadow: inset 0 0 0 0 #fff;
      margin: 0 -.25rem;
      padding: 0 .25rem;
      transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
      font-weight: 700;
      text-shadow: 2px 2px 5px #fffb81;
}
.sig a:hover{
    box-shadow: inset 0 0 0 0 #fff;
    color: black;
    
}

</style>

</head>

    <!---------------------header-------------------------->
<header class="header fixed-top">

<div class="container">

   <div >

    <b>  <a href="index_fac.php" class="logo" style="color:#3291a0; padding-left:360px;">Thesis Practicum Management System</a></b>
</div>
<br>
      <?php
         if(isset($_SESSION['login_user']))
         {
            ?>
    <div>        

            <nav class="nav">
               <a href="index_fac.php"><i class="fa-solid fa-house"></i> Home</a>
              <a href="thesis_fac.php">Thesis</a>
              <a href="practicum_fac.php">Practicum</a>
              <a href="booklist_fac.php">Book</a>
            <div class="sig">  <a href="logout_fac.php" style="color: red;"><i class="fa-sharp fa-solid fa-circle-xmark"></i> Sign Out</a></div> 
               <div class="welcome">
                  <a href="index_fac.php">
               <u>
                  <?php
                     echo "Welcome_".$_SESSION['login_user'];
                  ?></u></a>
                  
               </div>
            </nav>

            
      <?php
         }
         else{
      ?>
         <nav class="nav">
            <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
               <a href="faculty.php"><i class="fa-solid fa-door-open"></i> Sign In</a>
               
              
          
         </nav>
       <?php
         }
         
      ?>
      

   </div>

</div>

</header>
<!---------------------------home------------------------------>


</html>