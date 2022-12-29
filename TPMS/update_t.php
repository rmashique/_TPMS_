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
        <title>Update Password</title>
        <style>
            .wrapper{
                width: 600px;
                height: 5 00px;
                margin : 60px auto;
                background-color: #acd3fd;
                margin-top: 100px;
                border-radius: 50px;
                color: black;
                padding : 25px 15px;
                align-items: center;
                text-align:center;
            }
            body{
                background-image: url(img/upp.jpg);
            }
            .form-control{
                font-size: 1.5rem;
                height: 50px;
            }
            .btn{
                height: 50px;
                font-size: 15px;
                width: 200px;
            }
            
    
        </style>
    </head>
    <body>
    <section class="login" id="login">
            <div class="container" >
                <div class="wrapper" >

<?php
 $sl=$_POST['sl'];
 $id="SELECT * FROM `thesis` WHERE sl='$sl' ";
 $qy=mysqli_query($conn,$id);
 if(mysqli_num_rows($qy)!=0)
 {
     while($row=mysqli_fetch_assoc($qy))
     {
         $qw=$row['sl'];
         
     }
 }
?>

                <h1> <br> Update Your Thesis &nbsp </h1> <br> <br>
                <form action="" method="POST" enctype="multipart/form-data">
           
           

<!-------------------------------------------------------------------------------------------------------------
-->
            <b><span>SL :</span></b>
           <input type="varchar" value="<?php echo $qw ?>" name="sl"class="box" required>
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


           <input type="submit" value="Submit" name="submit1" class="link-btn" >
        </form>  
     
            </div>       
           
        </div>
     </section>
</body>
<?php
		if(isset($_POST['submit1']))
		{
            $pdf=$_FILES['link']['name'];
            $pdf_type=$_FILES['link']['type'];
            $pdf_size=$_FILES['link']['size'];
            $pdf_tem_loc=$_FILES['link']['tmp_name'];
            $pdf_store="thesis_pdf/".$pdf;
    
            move_uploaded_file($pdf_tem_loc,$pdf_store);

			if(mysqli_query($conn,"UPDATE `thesis` SET category='$_POST[category]', paper_name='$_POST[paper_name]', link='$pdf', semester_year='$_POST[semester_year]', publisher='$_POST[publisher]', pub_date='$_POST[pub_date]' WHERE sl='$_POST[sl]' ; "))
			{
				?>
				<script type="text/javascript">
					alert("Updated Successfully.");
                    window.location="profile.php"
				</script>

				<?php
			}
            else{
                ?>
				<script type="text/javascript">
					alert("Try Again.");
				</script>

				<?php
            }
		}

	?>


    </html>