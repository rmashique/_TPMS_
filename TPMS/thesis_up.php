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
            background-image: url(img/9.jpg);
        }
    </style>
</head>
<body>
<section class="contact" id="contact">
<h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">Thesis Report Uploading Form <i class="fa-solid fa-file-pdf"></i></h3>

        <form action="thesis_up.php" method="POST" enctype="multipart/form-data">
           
           

<!-------------------------------------------------------------------------------------------------------------
-->
            <b><span>Thesis Category :</span></b>
           <input type="varchar" placeholder="Enter Thesis Category" name="category"class="box" required>
            
           <b><span>Paper Name :</span></b>
           <input type="varchar" placeholder="Enter Paper Name" name="paper_name"class="box" required>

           <b><span>Upload Thesis PDF :</span></b>
           <input type="file" name="link" class="box" value="" required>

           <b><span>Semester :</span></b>
           <input type="varchar" placeholder="Enter semester-year" name="semester_year"class="box" required>
          
           <b><span>Publisher's Name :</span></b>
           <input type="varchar" placeholder="Enter Publisher's Name" name="publisher" class="box">
     
           <b><span>Publishing date :</span></b>
           <input type="date" placeholder="Enter Publishing date" name="pub_date"class="box" >


           <input type="submit" value="Submit" name="submit" class="link-btn" >
        </form>  
</section>

<?php

    if(isset($_POST['submit']))
    {
        $pdf=$_FILES['link']['name'];
        $pdf_type=$_FILES['link']['type'];
        $pdf_size=$_FILES['link']['size'];
        $pdf_tem_loc=$_FILES['link']['tmp_name'];
        $pdf_store="thesis_pdf/".$pdf;

        move_uploaded_file($pdf_tem_loc,$pdf_store);

        $sql="INSERT INTO `thesis`(`sl`, `st_id`, `category`, `paper_name`, `link`, `semester_year`, `publisher`, `pub_date`) VALUES  ('','$_SESSION[login_user]','$_POST[category]','$_POST[paper_name]','$pdf','$_POST[semester_year]','$_POST[publisher]','$_POST[pub_date]')";
        $query=mysqli_query($conn,$sql);
        ?>
        <script type="text/javascript">
               alert("Upload Successful");
               window.location="profile.php"
            </script>
            <?php

    }
?>
</body>
</html>