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
   <title>Practicum Project</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
  
   section{
       background-image: url(img/10a.jpg);
   }
   

</style>
</head>
<body>
<!---------------------header-------------------------->



<section>
    <h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">Practicum List <i class="fa-solid fa-briefcase"></i></h3>

    <div class="container">
      <div class="d-flex justify-content-center">
      <form class="searchbar" method="post">
          <input class="search_input" type="text" name="search" placeholder="Search By name...">
          <button style="background-color:#4ba2ff; " type="submit" name="submit"> 

          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
</form>
      </div>
    </div>
      <br><br/>
    
  
 <!-------------------------------------------------------php------------------------------------------------>     

<?php
if(isset($_POST['submit'])){
   $r=mysqli_query($conn,"SELECT * from practicum where project_name like '%$_POST[search]%' ");

   if(mysqli_num_rows($r)==0)
			{
				echo "Sorry! Project name is invalid. Try again.";
			}
   else 
   {
      echo "<table class='table table-dark table-sm table-hover'>";
            echo "<tr>";
                 
        
                       //table header
                                echo "<th>";  echo "SL";   echo "</th>";     
                                echo "<th>";  echo "Project Name";   echo "</th>";
                                echo "<th>";  echo "Supervisor";   echo "</th>";
                                echo "<th>";  echo "Link";   echo "</th>";
        
                                echo "<th>";  echo "Semester";   echo "</th>";
                                echo "<th>";  echo "Year";   echo "</th>";
                                
                    echo "</tr>";
        
                    while($row=mysqli_fetch_assoc($r))
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
                      
                       echo "</tr>";
                    }
                 echo "<table>";

   }
}


else{            
            $q=mysqli_query($conn,"SELECT * FROM `practicum` ORDER BY `practicum`.`sl` ASC ;");
        
            echo "<table class='table table-dark table-sm table-hover'>";
            // echo "<tr style='background-color: #90c5f9;'>";
                 
        
                       //table header
                                echo "<th>";  echo "SL";   echo "</th>";     
                                echo "<th>";  echo "Project Name";   echo "</th>";
                                echo "<th>";  echo "Supervisor";   echo "</th>";
                                echo "<th>";  echo "Link";   echo "</th>";
        
                                echo "<th>";  echo "Semester";   echo "</th>";
                                echo "<th>";  echo "Year";   echo "</th>";
                                
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
                      
                       echo "</tr>";
                    }
                 echo "<table>";
        
                

                  }  
?>

<!-------------------------------------------------------php------------------------------------------------>     


</section>


<script src="script.js"></script>
</body>
</html>