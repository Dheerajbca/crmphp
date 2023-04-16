<?php
    include("dbcon.php");

    $status =  $_REQUEST['1'];
    $value =  $_REQUEST['value'];
    $condition =  $_REQUEST['condition'];
    echo $status;

    
     if ($status == '4') {
        $sql = "UPDATE `products` SET `comission`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '3 ') {
        $sql = "UPDATE `products` SET `price`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '2') {
        $sql = "UPDATE `products` SET `description`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '1') {
        $sql = "UPDATE `products` SET `tite`='$value'  WHERE `sno` = '$condition'";
    }
      
    
    if (mysqli_query($db, $sql)) {
        header("location: productfetch.php");;
        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);
    ?>
    