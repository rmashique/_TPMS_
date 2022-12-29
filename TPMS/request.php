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
   <title>Book List</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
  
   section{
       background-image: url(img/hj.jpg);
   }

</style>
</head>
<body>
<!---------------------header-------------------------->



<section>
<h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">Book Request List <i class="fa-sharp fa-solid fa-book"></i></h3>
  
  
 <!-------------------------------------------------------php------------------------------------------------>     

<?php

    if(isset($_SESSION['login_user']))
    {
      $sql="SELECT student.st_id,st_name,student.contact, request.sl,id,b_name,edition,date FROM request INNER JOIN student ON request.st_id=student.st_id WHERE request.status = '' && request.request_to='$_SESSION[login_user]'  ";
        $res=mysqli_query($conn,$sql);

        if(mysqli_num_rows($res)==0)
        {
            ?>
            <h2><?php echo "Sorry! No Pending Request Found. Try again.";
            ?></h2>
        
        <?php
        }
        else{
            echo "<table class='table table-dark table-sm table-hover'>";
            echo "<tr>";

                    //table header
                                echo "<th>";  echo "SL";   echo "</th>";     
                                echo "<th>";  echo "Book ID";   echo "</th>";     
                                echo "<th>";  echo "Book Name";   echo "</th>";
                                echo "<th>";  echo "Student Id";   echo "</th>";
                                echo "<th>";  echo "Edition";   echo "</th>";
                                echo "<th>";  echo "Date";   echo "</th>";
                                echo "<th>";  echo "Status";   echo "</th>";
                echo "</tr>";

            while($row=mysqli_fetch_assoc($res))
            {
                
                echo "<td>";echo $row['sl'];echo "</td>";
                echo "<td>";echo $row['id'];echo "</td>";
                echo "<td>";echo $row['b_name'];echo "</td>";
                echo "<td>";echo $row['st_id'];echo "</td>";
                echo "<td>";echo $row['edition'];echo "</td>";
                echo "<td>";echo $row['date'];echo "</td>";
                
                    
                    ?>
					<td>
                    <form action="" method="post" style="display:inline-block;">
                        <input type="hidden" name="sl" value="<?php echo $row['sl'] ?>" >
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                        <input type="hidden" name="st_id" value="<?php echo $row['st_id'] ?>" >
                        <input type="hidden" name="contact" value="<?php echo $row['contact'] ?>" >
                        <input type="submit" name="Accept" value="Accept" class="btn btn-success" style="font-size:1.5rem; margin-left: 20px;">
                     </form>
                 
                  
              	 </td>
                  
					<?php
                    
                echo "</tr>";
                
               
            }
            if(isset($_POST['Accept']))
            {
            
              /*  $_SESSION['st_id']=$_POST['st_id'];
                $_SESSION['day']=$_POST['day'];*/
            
mysqli_query($conn,"UPDATE `request` SET `status` = 'Accepted'  WHERE st_id = '$_POST[st_id]' and sl ='$_POST[sl]'; ");
mysqli_query($conn,"UPDATE `request` SET `contact`= '$_POST[contact]' WHERE st_id = '$_POST[st_id]' and sl ='$_POST[sl]'; ");
mysqli_query($conn,"UPDATE `book` SET status='Not available' WHERE  id ='$_POST[id]'; ");
             
            
            ?>
            <script type="text/javascript">
                alert("Updated Successfully.");
                window.location="request.php";

                
            </script>
            <?php
            }
            echo "<table>";
                
                
        }
        
    }



    ?>
<!-------------------------------------------------------php------------------------------------------------>     
</section>


<script src="script.js"></script>
</body>
</html>