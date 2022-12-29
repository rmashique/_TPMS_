<?php
   include "connection.php";
   include "navbar_st.php";

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <title>Book List</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
  
   section{
       background-image: url(img/b11.jpg);
   }
   
</style>
</head>
<body>
<!---------------------header-------------------------->



<section>
<h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">Book List <i class="fa-sharp fa-solid fa-book"></i></h3>


<div class="container">
      <div class="d-flex justify-content-center">
        <form class="searchbar" method="post">
          <input class="search_input" type="text" name="search" placeholder="Search Book...">
          <button style="background-color:#4ba2ff; " type="submit" name="submit"> 
          <a href="" class="search_icon"><i class="fas fa-search"></i></a>
          

         </form>
      </div>
    </div>
      <br><br>
    
  
 <!-------------------------------------------------------php------------------------------------------------>     

<?php

if(isset($_POST['submit']))
{
   $r=mysqli_query($conn,"SELECT * from book where b_name like '%$_POST[search]%' ");

   if(mysqli_num_rows($r)==0)
			{
				echo "Sorry! Book name is invalid. Try again.";
			}
   else 
   {
      echo "<table class='table table-dark table-sm table-hover'>";
                   echo "<tr>";
                 
        
                       //table header
                                echo "<th>";  echo "SL";   echo "</th>";     
                                echo "<th>";  echo "Uploaded By";   echo "</th>";     
                                echo "<th>";  echo "Book Name";   echo "</th>";
                                echo "<th>";  echo "Author";   echo "</th>";
                                echo "<th>";  echo "Edition";   echo "</th>";
                                echo "<th>";  echo "Status";   echo "</th>";
                                echo "<th>";  echo "Dept";   echo "</th>";
                                echo "<th>";  echo "Request";   echo "</th>";
                                
                    echo "</tr>";
        
                    while($row=mysqli_fetch_assoc($r))
                    {
                       echo "<tr>";
                       echo "<td>";echo $row['id'];echo "</td>";
                       echo "<td>";echo $row['st_id'];echo "</td>";
                       echo "<td>";echo $row['b_name'];echo "</td>";
                       echo "<td>";echo $row['author'];echo "</td>";
                       echo "<td>";echo $row['edition'];echo "</td>";
                       echo "<td>";echo $row['status'];echo "</td>";
                       echo "<td>";echo $row['dept'];echo "</td>";
                       ?>
                       <td>
                  <form action="" method="post" style="display:inline-block;">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                     <input type="hidden" name="b_name" value="<?php echo $row['b_name'] ?>" >
                     <input type="hidden" name="edition" value="<?php echo $row['edition'] ?>" >
                     <input type="hidden" name="st_id" value="<?php echo $row['st_id'] ?>" >
                     <input type="submit" name="send" value="Send" class="btn-primary" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>		  
				</td>
                      
                       <?php
                      
                      
                       echo "</tr>";
                    }
                 echo "<table>";
   }

}
else{
            
            $q=mysqli_query($conn,"SELECT * FROM `book` ORDER BY `book`.`status` ASC ;");
        
                    echo "<table class='table table-dark table-sm table-hover'>";
                    echo "<tr>";
                 
        
                       //table header
                                echo "<th>";  echo "SL";   echo "</th>";     
                                echo "<th>";  echo "Uploaded By";   echo "</th>";     
                                echo "<th>";  echo "Book Name";   echo "</th>";
                                echo "<th>";  echo "Author";   echo "</th>";
                                echo "<th>";  echo "Edition";   echo "</th>";
                                echo "<th>";  echo "Status";   echo "</th>";
                                echo "<th>";  echo "Dept";   echo "</th>";
                                echo "<th>";  echo "Request";   echo "</th>";
                                
                    echo "</tr>";
        
                    while($row=mysqli_fetch_assoc($q))
                    {
                       echo "<tr>";
                       echo "<td>";echo $row['id'];echo "</td>";
                       echo "<td>";echo $row['st_id'];echo "</td>";
                       echo "<td>";echo $row['b_name'];echo "</td>";
                       echo "<td>";echo $row['author'];echo "</td>";
                       echo "<td>";echo $row['edition'];echo "</td>";
                       echo "<td>";echo $row['status'];echo "</td>";
                       echo "<td>";echo $row['dept'];echo "</td>";
                       ?>
                       <td>
                  <form action="" method="post" style="display:inline-block;">
                     <input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
                     <input type="hidden" name="b_name" value="<?php echo $row['b_name'] ?>" >
                     <input type="hidden" name="edition" value="<?php echo $row['edition'] ?>" >
                     <input type="hidden" name="st_id" value="<?php echo $row['st_id'] ?>" >
                     <input type="submit" name="send" value="Send" class="btn-primary" style="font-size:1.5rem; width:120px; text-align:center; height: 35px; border-radius:5px;">
                  </form>		  
				</td>
                      
                       <?php
                      
                      
                       echo "</tr>";
                    }
                 echo "<table>";
        
                

  }
?>

<!-------------------------------------------------------php------------------------------------------------>     



</section>
<?php
    
    if(isset($_POST['send']))
    {
        $today = date("d/m/Y");
        $sql="INSERT INTO `request`(`sl`,`id`, `b_name`, `edition`, `st_id`,`request_to`, `date`, `status`) VALUES  ('','$_POST[id]','$_POST[b_name]','$_POST[edition]','$_SESSION[login_user]','$_POST[st_id]','$today','')";
        $query=mysqli_query($conn,$sql);
        ?>
        <script type="text/javascript">
               alert("Request Sent. ");
               window.location="my_request.php";
            </script>
            <?php

    }
   
?>

<script src="script.js"></script>
</body>
</html> 