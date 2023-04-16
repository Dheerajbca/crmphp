<?php
    include("dbcon.php");

    $status =  $_REQUEST['1'];
    $value =  $_REQUEST['value'];
    $condition =  $_REQUEST['condition'];
    


    echo $status;

   
   if ($status == '1') {
        $sql = "UPDATE `admin` SET `myusername`='$value'  WHERE `Id` = '$condition'";
    }
    else if ($status == '2') {
        $sql = "UPDATE `admin` SET `password`='$value'  WHERE `Id` = '$condition'";
    }
      
    
    if (mysqli_query($db, $sql)) {
        header("location: admin.php");;
        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);
    ?>
    