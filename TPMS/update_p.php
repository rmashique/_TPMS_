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
 $id="SELECT * FROM `practicum` WHERE sl='$sl' ";
 $qy=mysqli_query($conn,$id);
 if(mysqli_num_rows($qy)!=0)
 {
     while($row=mysqli_fetch_assoc($qy))
     {
         $qw=$row['sl'];
         
     }
 }
?>

                <h1> <br> Update Your Practicum &nbsp </h1> <br> <br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
           
           

<!----------------------------------------------------------------------------------------------------------------

-->
           
            <b><span>SL :</span></b>
           <input type="varchar" value="<?php echo $qw ?>" name="sl"class="box" required>

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
            </div>       
           
        </div>
     </section>
</body>
<?php
		if(isset($_POST['submit']))
		{

			if(mysqli_query($conn,"UPDATE `practicum` SET project_name='$_POST[project_name]', supervisor='$_POST[supervisor]', link='$_POST[link]', semester='$_POST[semester]', year='$_POST[year]' WHERE sl='$_POST[sl]' ; "))
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