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
 $id=$_POST['id'];
 $d="SELECT * FROM `book` WHERE id='$id' ";
 $qy=mysqli_query($conn,$d);
 if(mysqli_num_rows($qy)!=0)
 {
     while($row=mysqli_fetch_assoc($qy))
     {
         $qw=$row['id'];
         
     }
 }
?>

                <h1> <br> Update Your Book &nbsp </h1> <br> <br>
                <form action="" method="POST">
           
           

<!-------------------------------------------------------------------------------------------------------------
-->
            <b><span>SL :</span></b>
            <input type="varchar" value="<?php echo $qw ?>" name="id"class="box" required>
                        
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
            </div>       
           
        </div>
     </section>
</body>
<?php
		if(isset($_POST['submit']))
		{
           

			if(mysqli_query($conn,"UPDATE `book` SET b_name='$_POST[b_name]', author='$_POST[author]', edition='$_POST[edition]', status='$_POST[status]', dept='$_POST[dept]' WHERE id='$_POST[id]' ; "))
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