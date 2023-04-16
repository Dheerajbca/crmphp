<?php
    include("dbcon.php");
    

    $status =  $_REQUEST['1'];
    $value =  $_REQUEST['value'];
    $condition =  $_REQUEST['condition'];
    echo $status;

     if ($status == '2') {
        $sql = "UPDATE `managers` SET `password`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '1') {
        $sql = "UPDATE `managers` SET `username`='$value'  WHERE `sno` = '$condition'";
    }
      
    
    if (mysqli_query($db, $sql)) {
        header("location: manageradmin.php");;
        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);
    ?>
    