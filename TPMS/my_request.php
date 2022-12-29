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
   <title>My Book Request</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
  
   section{
       background-image: url(img/wp.jpg);
   }
   .book{
      margin-top: -55px;
   }

</style>
</head>
<body>
<!---------------------header-------------------------->



<section>
<h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">My Book Request List <i class="fa-sharp fa-solid fa-book"></i></h3>    
      <br><br/>
    
  
 <!-------------------------------------------------------php------------------------------------------------>     
<div class="book">
<?php

            
            $q=mysqli_query($conn,"SELECT * FROM `request` WHERE st_id='$_SESSION[login_user]';");
        
            echo "<table class='table table-dark table-sm table-hover'>";
              echo "<tr>";
                 
        
                       //table header
                                echo "<th>";  echo "SL";   echo "</th>";     
                                echo "<th>";  echo "Book Name";   echo "</th>";
                                echo "<th>";  echo "Edition";   echo "</th>";
                                echo "<th>";  echo "Date";   echo "</th>";
                                echo "<th>";  echo "Status";   echo "</th>";
                                echo "<th>";  echo "Contact Info";   echo "</th>";
                              
                                
                    echo "</tr>";
        
                    while($row=mysqli_fetch_assoc($q))
                    {
                       echo "<tr>";
                       echo "<td>";echo $row['sl'];echo "</td>";
                       echo "<td>";echo $row['b_name'];echo "</td>";
                       echo "<td>";echo $row['edition'];echo "</td>";
                        echo "<td>";echo $row['date'];echo "</td>";
                       echo "<td>";echo $row['status'];echo "</td>";
                       echo "<td>";echo $row['contact'];echo "</td>";
                      
                       echo "</tr>";
                    }
                 echo "<table>";
        
                


?>

<!-------------------------------------------------------php------------------------------------------------>     

</div>
</section>


<script src="script.js"></script>
</body>
</html>