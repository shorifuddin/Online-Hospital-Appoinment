<?php

    $db_host='localhost';
    $db_usname='root';
    $db_pas='';
    $db_name='pj2';

    $con=mysqli_connect($db_host,$db_usname,$db_pas,$db_name);

    if (!($con)) {
        echo "FAILD";
    }else{
        echo "";
    }

?>