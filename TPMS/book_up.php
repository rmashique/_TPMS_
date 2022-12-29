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
    <title>Upload Book</title>
    <style>
         body{
            background-image: url(img/b11.jpg);
        }
    </style>
</head>
<body>
<section class="contact" id="contact">
        <h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">Book Upload Form <i class="fa-sharp fa-solid fa-book"></i></h3>
        <form action="book_up.php" method="POST">
           
           

<!-------------------------------------------------------------------------------------------------------------
-->
            
           <b><span>Book Name :</span></b>
           <input type="varchar" placeholder="Enter Book Name" name="b_name"class="box" required>

           <b><span>Author Name :</span></b>
           <input type="varchar" placeholder="Enter Author Name" name="author"class="box" required>

           <b><span>Edition :</span></b>
           <input type="varchar" placeholder="Enter Edition" name="edition"class="box" required>
          
           <b><span>Status :</span></b>
           <input type="varchar" placeholder="Enter status(e.g. available/not)" name="status" class="box">
     
           <b><span>Department :</span></b>
           <input type="varchar" placeholder="Enter Department" name="dept"class="box" >


           <input type="submit" value="Submit" name="submit" class="link-btn" >
        </form>  
</section>

<?php

    if(isset($_POST['submit']))
    {

        $sql="INSERT INTO `book`(`id`,`st_id`, `b_name`, `author`, `edition`, `status`,`dept`) VALUES  ('','$_SESSION[login_user]','$_POST[b_name]','$_POST[author]','$_POST[edition]','$_POST[status]','$_POST[dept]')";
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