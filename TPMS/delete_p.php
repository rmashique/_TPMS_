<?php

    include "connection.php";
    if(isset($_POST['delete']))
    {
        $sl= $_POST['sl'];
        $query="DELETE FROM `practicum` WHERE sl ='$sl' ";
        $query_run= mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Delete Successfully"); </script>';
            header("location:profile.php");
        }
        else{
            echo '<script> alert("Try Again"); </script>';

        }
    }


?>