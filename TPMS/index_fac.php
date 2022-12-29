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
   <title>Homepage</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
   body{
      background-image: url(img/pur.jpg);

   }
   
   .process{
      margin-top: 100px;
   }
   .process .box-container{
  
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
}
.process .box-container .box{
    background-color: #e9ecef;
    padding: 2rem;
    border-radius: .5rem;
    text-align: center;
    box-shadow: var(--box-shadow);
}
.process .box-container .box img{
    height: 16rem;
    margin: 1rem 0;
    border-radius: 10px;
}
.process .box-container .box h3{
    font-size: 2rem;
    color: black;
    margin: 1.5rem 0;
}
.process .box-container .box p{
    font-size: 1.5rem;
    color: black;
    line-height: 2;
}


</style>
</head>
<body>

    
<section class="process">
   <h1 class="heading">Our Services</h1>
   <div class="box-container container">
      <div class="box">
      <img src="img/th.jpg" alt="">
          <!-- <i class="fa-solid fa-calendar-check"></i>-->
         <h3><b> Thesis Report Collection</b></h3>
         <p>The system allows the user to view the vast collection of thesis reports and even 
            upload their own thesis in the system to help others to enhance their knowledge</p>
      </div>
      <div class="box">
         <img src="img/pr.png" alt="">
        <!-- <i class="fa-solid fa-calendar-check"></i>-->
         <h3><b>Practicum Project Collection</b></h3>
         <p>The system allows the user to view the vast collection of practicum projects and even 
            upload their own project in the system to help others to enhance their work.</p>
      </div>
      <div class="box">
         <img src="img/book.jpg" alt="">
        <!-- <i class="fa-solid fa-calendar-check"></i>-->
         <h3><b>Old Book Exchange Facility</b> </h3>
         <p>The system creates an opportunity for the students to exchange their books to spread out the 
            knowledge.</p>
      </div>
   </div>
</section>




<script src="script.js"></script>
</body>
</html>