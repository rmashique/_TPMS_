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
    <title>Upload Thesis Form</title>
    <style>
         body{
            background-image: url(img/4.jpg);
        }
        .form{
            background-color: var(--light-bg);
            opacity: .8;
            height: 60px;
            text-align: center;
            justify-content: center;
            margin-left: 400px;
            margin-right: 400px;
            border-radius: 3rem;
            margin-bottom: 30px;
            
        }
    </style>
</head>
<body>
<section class="contact" id="contact">
    <div class="form" >
<h3 style="color:black; margin-top: 80px; font-size:2.5rem; padding-top: 10px;" class="heading">Practicum Project Uploading Form <i class="fa-solid fa-cloud-arrow-up"></i></h3>
      </div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           
           
            
           <b><span>Project Name :</span></b>
           <input type="varchar" placeholder="Enter Paper Name" name="project_name"class="box" required>

           <b><span>Supervisor Name :</span></b>
           <input type="text" placeholder="Enter Supervisor Name" name="supervisor"class="box" required>

           <b><span>Project Github-Link :</span></b>
           <input type="varchar" placeholder="Enter Github link" name="link" class="box" value="" required>

           <b><span>Semester :</span></b>
           <input type="varchar" placeholder="Enter semester" name="semester" class="box"required>

           <b><span>Year :</span></b>
           <input type="number" placeholder="Enter year" name="year"class="box" required>


           <input type="submit" value="Submit" name="submit" class="link-btn" >
        </form>  
</section>
<?php

    if(isset($_POST['submit']))
    {

        $sql="INSERT INTO `practicum`(`sl`, `st_id`, `project_name`, `supervisor`, `link`, `semester`,`year`) VALUES  ('','$_SESSION[login_user]','$_POST[project_name]','$_POST[supervisor]','$_POST[link]','$_POST[semester]','$_POST[year]')";
        $query=mysqli_query($conn,$sql);
        ?>
        <script type="text/javascript">
               alert("Successfully Uploaded ");
               window.location="profile.php"
            </script>
            <?php

    }
?>
</body>
</html>