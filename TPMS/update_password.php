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
            align-items:center;
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
 $st_id=$_POST['st_id'];
 $id="SELECT * FROM `student` WHERE st_id='$st_id' ";
 $qy=mysqli_query($conn,$id);
 if(mysqli_num_rows($qy)!=0)
 {
     while($row=mysqli_fetch_assoc($qy))
     {
         $qw=$row['st_name'];
         $sw=$row['st_id'];
     }
 }
?>

                <h1> <br> Update Your Password &nbsp <i class="fa-solid fa-unlock"></i></h1> <br> <br>
                <form action="" method="post">
                <input type="varchar" name="st_name" value="<?php echo $qw ?>" class="box" required=""> <br>
                <input type="number" name="st_id" value="<?php echo $sw ?>" class="box" required=""> <br>
                <input type="varchar" name="password" placeholder="New Password" class="box" required=""> <br>
                <button class="btn btn-primary" type="submit" name="submit">Update Password</button>
                
            </form>
     
            </div>       
           
        </div>
     </section>
</body>
<?php
		if(isset($_POST['submit']))
		{
			if(mysqli_query($conn,"UPDATE `student` SET password='$_POST[password]' WHERE st_id='$_POST[st_id]' ; "))
			{
				?>
				<script type="text/javascript">
					alert("The Password Updated Successfully.");
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