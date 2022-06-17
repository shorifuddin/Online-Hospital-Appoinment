<?php
        require_once('function/function.php');
        $id=$_GET['delet'];
        $del="DELETE FROM user_data WHERE user_id='$id'";

        if (mysqli_query($con,$del)) {
           header('Location:alluser.php');
        }else{
            echo "Failed To delet";
        }


?>