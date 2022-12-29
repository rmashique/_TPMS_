<?php
   include "connection.php";
   include "navbar_fac.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thesis List</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="styleS.css">
<style type="text/css">
  
   section{
       background-image: url(img/rr.jpg);
   }
   

</style>
</head>
<body>
<!---------------------header-------------------------->



<section>
<h3 style="color:black; margin-top: 80px; font-size:2.5rem" class="heading">Thesis List <i class="fa-solid fa-file-pdf"></i></h3>
<div class="container">
      <div class="d-flex justify-content-center">
      <form class="searchbar" method="post">
          <input class="search_input" type="text" name="search"  placeholder="Search Thesis by name or category...">
          <button style="background-color:#4ba2ff; " type="submit" name="submit"> 

          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
</form>
      </div>
    </div>
  <br><br/>

<table style="margin-top: -20px;">
    <?php

if(isset($_POST['submit']))
{
   $r=mysqli_query($conn,"SELECT * from thesis where paper_name like '%$_POST[search]%'  ");
   $h=mysqli_query($conn,"SELECT * from thesis where category like '%$_POST[search]%' ");

   if((mysqli_num_rows($r)==0) && (mysqli_num_rows($h)==0))
			{
				echo "Sorry! Paper name or category is invalid. Try again.";
			}
   else if((mysqli_num_rows($r)!=0))
   {
      echo "<table class='table table-dark table-sm table-hover'>";
      echo "<tr>";
         

               //table header
                        echo "<th>";  echo "SL";   echo "</th>";     
                        echo "<th>";  echo "Student Id";   echo "</th>";     
                        echo "<th>";  echo "Category";   echo "</th>";
                        echo "<th>";  echo "Paper Name";   echo "</th>";
                        echo "<th>";  echo "Link";   echo "</th>";
                        echo "<th>";  echo "Semester-Year";   echo "</th>";
                        echo "<th>";  echo "Publisher";   echo "</th>";
                        echo "<th>";  echo "Publishing Date";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($r))
            {
               echo "<tr>";
               echo "<td>";echo $row['sl'];echo "</td>";
               echo "<td>";echo $row['st_id'];echo "</td>";
               echo "<td>";echo $row['category'];echo "</td>";
               echo "<td>";echo $row['paper_name'];echo "</td>";
               ?>
               <td>
                  <form action="" method="post" style="display:inline-block;">
                    
                     <a type="application/pdf" target="_blank"  href="thesis_pdf/<?php echo $row['link'] ; ?>" >View</a>
                  </form>
                 
               </td>
              
               <?php
               echo "<td>";echo $row['semester_year'];echo "</td>";
               echo "<td>";echo $row['publisher'];echo "</td>";
               echo "<td>";echo $row['pub_date'];echo "</td>";
              
               echo "</tr>";
              
            }
         echo "<table>";
   }
   else if((mysqli_num_rows($h)!=0))
   {
      echo "<table class='table table-dark table-sm table-hover'>";
      echo "<tr>";
         

               //table header
                        echo "<th>";  echo "SL";   echo "</th>";     
                        echo "<th>";  echo "Student Id";   echo "</th>";     
                        echo "<th>";  echo "Category";   echo "</th>";
                        echo "<th>";  echo "Paper Name";   echo "</th>";
                        echo "<th>";  echo "Link";   echo "</th>";
                        echo "<th>";  echo "Semester-Year";   echo "</th>";
                        echo "<th>";  echo "Publisher";   echo "</th>";
                        echo "<th>";  echo "Publishing Date";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($h))
            {
               echo "<tr>";
               echo "<td>";echo $row['sl'];echo "</td>";
               echo "<td>";echo $row['st_id'];echo "</td>";
               echo "<td>";echo $row['category'];echo "</td>";
               echo "<td>";echo $row['paper_name'];echo "</td>";
               ?>
               <td>
                  <form action="" method="post" style="display:inline-block;">
                    
                     <a type="application/pdf" target="_blank"  href="thesis_pdf/<?php echo $row['link'] ; ?>" >View</a>
                  </form>
                 
               </td>
              
               <?php
               echo "<td>";echo $row['semester_year'];echo "</td>";
               echo "<td>";echo $row['publisher'];echo "</td>";
               echo "<td>";echo $row['pub_date'];echo "</td>";
              
               echo "</tr>";
              
            }
         echo "<table>";
   }

}
    else{
    $q=mysqli_query($conn,"SELECT * FROM `thesis` ORDER BY `thesis`.`sl` ASC ;");

    echo "<table class='table table-dark table-sm table-hover'>";
      echo "<tr>";
         

               //table header
                        echo "<th>";  echo "SL";   echo "</th>";     
                        echo "<th>";  echo "Student Id";   echo "</th>";     
                        echo "<th>";  echo "Category";   echo "</th>";
                        echo "<th>";  echo "Paper Name";   echo "</th>";
                        echo "<th>";  echo "Link";   echo "</th>";
                        echo "<th>";  echo "Semester-Year";   echo "</th>";
                        echo "<th>";  echo "Publisher";   echo "</th>";
                        echo "<th>";  echo "Publishing Date";   echo "</th>";
                        
            echo "</tr>";

            while($row=mysqli_fetch_assoc($q))
            {
               echo "<tr>";
               echo "<td>";echo $row['sl'];echo "</td>";
               echo "<td>";echo $row['st_id'];echo "</td>";
               echo "<td>";echo $row['category'];echo "</td>";
               echo "<td>";echo $row['paper_name'];echo "</td>";
               ?>
               <td>
                  <form action="" method="post" style="display:inline-block;">
                    
                     <a type="application/pdf" target="_blank"  href="thesis_pdf/<?php echo $row['link'] ; ?>" >View</a>
                  </form>
                 
               </td>
              
               <?php
               echo "<td>";echo $row['semester_year'];echo "</td>";
               echo "<td>";echo $row['publisher'];echo "</td>";
               echo "<td>";echo $row['pub_date'];echo "</td>";
              
               echo "</tr>";
              
            }
         echo "<table>";
         
         }
?>


</section>
<script type="text/javascript">
            function openTab(th)
            {
                window.open(th.name,'_blank');
            }
        </script>


<script src="script.js"></script>
</body>
</html>