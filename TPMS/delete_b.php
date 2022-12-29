<?php

    include "connection.php";
    if(isset($_POST['delete']))
    {
        $id= $_POST['id'];
        $query="DELETE FROM `book` WHERE id ='$id' ";
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