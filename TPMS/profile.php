<?php
    include "connection.php";
    include "navbar_st.php";

?>
<!DOCTYPE html>
<html lang="en">
    <title>Student Profile</title>
    <style type="text/css">
        body{
            background-image: url(img/hui.jpg);
        }
        .proimg{
            height: 200px;
            width: 200px;
            align-items: center;
        }
        .wrapper{
            margin: 0 auto;
            margin-top: 80px;
            width:400px;
            align-items: center;
        }
        h2{
            text-align: center;
        }
        .file{
         font-size: 1.5rem;
         background-color: #89bdc7;
         padding-left: 25px;
         padding-top: 25px;
         padding-bottom: 25px;
         padding-right: 25px;
         border-radius: .5rem;
      }
	  .schedule{
		  background-color: #e6e6e6;
	  }
        .btn {
            width: 400px;
            margin: 0 auto;
            display: inline-block;
			padding: 1rem 3rem;
			border-radius: .5rem;
         border: 2px solid black;
			background-color: #a8f1ff;
			cursor: pointer;
			font-size: 2rem;
			color: var(--black);
}
.btn:hover{
    background-color: black;
    color:var(--white);
 }
 .button-27 {
  appearance: none;
  background-color: #4ea3ff;
  border: 2px solid black;
  border-radius: 15px;
  box-sizing: border-box;
  color: black;
  cursor: pointer;
  font-size: 15px;
  font-weight: 500;
  height: 50px;
  line-height: normal;
  margin: 0;
  min-height: 30px;
  min-width: 0;
  outline: none;
  padding: 2px 24px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  will-change: transform;
}

.button-27:disabled {
  pointer-events: none;
}

.button-27:hover {
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button-27:active {
  box-shadow: none;
  transform: translateY(0);
}
.fill{
   justify-content: center;
   margin-left: 130px;
}
.form1 {
  display:inline-block;
  width: 150px;
}
.center {
  text-align:center;
  
}

    </style>

<body>
   
<div class="container">
 		<form action="" method="post">
            
 			
 		</form>
 		<div class="wrapper">
 			<?php
 				$q=mysqli_query($conn,"SELECT * FROM student where st_id='$_SESSION[login_user]'; ");
 			?>
          <div style="margin-top:140px;">
 			<h2> <b>My Profile</b></h2>
 			</div>
          <?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align:center;'>
                
                 <img class='img-circle profile-img' height=120 width=120 src='img/us.png'>
                
 					</div>";
 			
 			?>
 			<div style="text-align: center;font-size: 20px;">
 				<b >Welcome</b>
 				<h4>
 					<?php
 						echo $_SESSION['login_user'];
 					?>
 				</h4>
 			</div> <br>
      </div>
      </div>
      <div class="center">
     <form class="form1" action ="update_password.php" method="post">
        <input type="hidden" name="st_id" value="<?php echo $_SESSION['login_user']  ?>">
        <button class="button-27" role="button">Update Password</button> &nbsp &nbsp
       </form>
    
    <form class="form1" action ="request.php" method="post">
    <button class="button-27" role="button" style="background-color:#4ea3ff;  border: 2px solid black;">View Book Request</button>
    </form>
   </div>
          
          <div class="container">
          <div class="wrapper">
         <?php
			//echo "<b>";
				echo "<table class='table table-bordered' style='background-color:black; color:white; font-size: 15px; margin-top:-50px;'>";
					echo "<tr>";
						echo "<td>";
							echo "<b> Name: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['st_name'];
						echo "</td>";
					echo "</tr>";
						

					echo "<tr>";
						echo "<td>";
							echo "<b> Student ID: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['st_id'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> E-mail: </b>";
						echo "</td>";

						echo "<td>";
							echo $row['st_email'];
						echo "</td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Department: </b>";
						echo "</td>";

						echo "<td>";
							echo "CSE";
						echo "</td>";
					echo "</tr>";echo "</table>";

				

				//echo "</b>"; <a href="" class="btn">Upload Your Work</a>
			?>
      <br>
      
 		</div>

 	</div>
    
    <div class="fill">
      <a href="thesis_up.php" class="btn">--Upload Thesis Report--</a>   &nbsp &nbsp &nbsp &nbsp &nbsp
      <a href="practicum_up.php" class="btn">--Upload Practicum Project--</a>  &nbsp &nbsp &nbsp &nbsp &nbsp
      <a href="book_up.php" class="btn">--Upload Your Book--</a>
	  <br> <br> <br> <br> <br> <br></div>
	 <section class="schedule" id="schedule">
<h3 style="color:black; margin-top: 40px;" class="heading">My Work</h3>
	<!------------------------------------------------------my work thesis---------------------------------------------------------------------->
   <h3 style="color:black; margin-top: 40px; font-size:2.5rem" class="heading">Thesis <i class="fa-solid fa-file-pdf"></i></h3>

	<div>
<?php
	   if(isset($_SESSION['login_user']))
      {
        $q=mysqli_query($conn,"SELECT * from thesis where st_id='$_SESSION[login_user]' ; ");
            
         if(mysqli_num_rows($q)==0)
         {
            
         }
         else{

            echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color: #90c5f9;'>";
         

               //table header
			   echo "<th>";  echo "SL";   echo "</th>";     
			   echo "<th>";  echo "Category";   echo "</th>";
			   echo "<th>";  echo "Paper Name";   echo "</th>";
			   echo "<th>";  echo "Link";   echo "</th>";
			   echo "<th>";  echo "Semester-Year";   echo "</th>";
			   echo "<th>";  echo "Publisher";   echo "</th>";
			   echo "<th>";  echo "Publishing Date";   echo "</th>";
			   echo "<th>";  echo "Operations";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($q))
            {
				echo "<tr>";
				echo "<td>";echo $row['sl'];echo "</td>";
				echo "<td>";echo $row['category'];echo "</td>";
				echo "<td>";echo $row['paper_name'];echo "</td>";
				?>
				<td>	 
					  <a type="application/pdf" target="_blank"  href="thesis_pdf/<?php echo $row['link'] ; ?>" >View</a>				  
				</td>
			   
				<?php
				echo "<td>";echo $row['semester_year'];echo "</td>";
			
				echo "<td>";echo $row['publisher'];echo "</td>";
				echo "<td>";echo $row['pub_date'];echo "</td>";
			   
				
               ?>
               <td>
                  <form action="delete_t.php" method="post" style="display:inline-block;">
                     <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                     <input type="submit" name="delete" value="Delete" class="btn-danger" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>
                  <form action="update_t.php" method="post"style="display:inline-block;">
                     <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                     <input type="submit" name="update" value="Update" class="btn-primary" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>
               </td>
              
               <?php
					echo "</tr>";
			   }
			echo "<table>";
         }
      }
      
      else
      {
        
      echo "Please Login First";
 
      }
  



?>
</div>
	<!------------------------------------------------------my work practicum---------------------------------------------------------------------->
   <h3 style="color:black; margin-top: 40px; font-size:2.5rem" class="heading">Practicum Project <i class="fa-solid fa-link"></i></h3>
	<div>
<?php
	   if(isset($_SESSION['login_user']))
      {
        $q=mysqli_query($conn,"SELECT * from practicum where st_id='$_SESSION[login_user]' ; ");
            
         if(mysqli_num_rows($q)==0)
         {
            
         }
         else{

            echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color: #6fa8e4;'>";
         

               //table header
			   echo "<th>";  echo "SL";   echo "</th>";     
			   echo "<th>";  echo "Project Name";   echo "</th>";
			   echo "<th>";  echo "Supervisor";   echo "</th>";
			   echo "<th>";  echo "Link";   echo "</th>";
			   echo "<th>";  echo "Semester";   echo "</th>";
			   echo "<th>";  echo "Year";   echo "</th>";
			   echo "<th>";  echo "Operations";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($q))
            {
				echo "<tr>";
                       echo "<td>";echo $row['sl'];echo "</td>";
                       echo "<td>";echo $row['project_name'];echo "</td>";
                       echo "<td>";echo $row['supervisor'];echo "</td>";
                       ?>
                       <td>	 
					  <a type="" target="_blank"  href="<?php echo $row['link'] ; ?>" >View</a>				  
				</td>
                      
                       <?php
                        echo "<td>";echo $row['semester'];echo "</td>";
                       echo "<td>";echo $row['year'];echo "</td>";
			   
				
               ?>
               <td>
               <form action="delete_p.php" method="post" style="display:inline-block;">
                     <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                     <input type="submit" name="delete" value="Delete" class="btn-danger" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>
                  <form action="update_p.php" method="post"style="display:inline-block;">
                     <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                     <input type="submit" name="update" value="Update" class="btn-primary" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>
               </td>
              
               <?php
					echo "</tr>";
			   }
			echo "<table>";
         }
      }
      
      else
      {
        
      echo "Please Login First";
 
      }
  



?>
</div>
<!---------------------------------------------------------------------------------------------------------------------------->

   <!------------------------------------------------------my work book---------------------------------------------------------------------->
   <h3 style="color:black; margin-top: 40px; font-size:2.5rem" class="heading">Book List <i class="fa-solid fa-book"></i></h3>
	<div>
<?php
	   if(isset($_SESSION['login_user']))
      {
        $q=mysqli_query($conn,"SELECT * from book where st_id='$_SESSION[login_user]' ; ");
            
         if(mysqli_num_rows($q)==0)
         {
            
         }
         else{

            echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color: #6fa8e4;'>";
         

               //table header
			   echo "<th>";  echo "SL";   echo "</th>";     
			   echo "<th>";  echo "Book Name";   echo "</th>";
			   echo "<th>";  echo "Author";   echo "</th>";
			   echo "<th>";  echo "Edition";   echo "</th>";
			   echo "<th>";  echo "Status";   echo "</th>";
			   echo "<th>";  echo "Dept";   echo "</th>";
			   echo "<th>";  echo "Operations";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($q))
            {
				echo "<tr>";
                       echo "<td>";echo $row['id'];echo "</td>";
                       echo "<td>";echo $row['b_name'];echo "</td>";
                       echo "<td>";echo $row['author'];echo "</td>";
                       echo "<td>";echo $row['edition'];echo "</td>";
                       
                        echo "<td>";echo $row['status'];echo "</td>";
                       echo "<td>";echo $row['dept'];echo "</td>";
			   
				
               ?>
               <td>
               <form action="delete_b.php" method="post" style="display:inline-block;">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                     <input type="submit" name="delete" value="Delete" class="btn-danger" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>
                  <form action="update_b.php" method="post"style="display:inline-block;">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                     <input type="submit" name="update" value="Update" class="btn-primary" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>
               </td>
              
               <?php
					echo "</tr>";
			   }
			echo "<table>";
         }
      }
      
      else
      {
        
      echo "Please Login First";
 
      }
  



?>
</div>
<!---------------------------------------------------------------------------------------------------------------------------->
</section>

</body>
</html>