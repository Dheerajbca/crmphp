<?php
    include("dbcon.php");

    $status =  $_REQUEST['1'];
    $value =  $_REQUEST['value'];
    $condition =  $_REQUEST['condition'];
    echo $status;

    if ($status == '8') {
        $sql = "UPDATE `coustomer` SET `Payment Status`='$value'  WHERE `sno` = '$condition'";    
    }   
    else if ($status == '6' ) {
        $sql = "UPDATE `coustomer` SET `administrationname`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '7') {
        $sql = "UPDATE `coustomer` SET `leadcomments`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '5') {
        $sql = "UPDATE `coustomer` SET `email`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '4') {
        $sql = "UPDATE `coustomer` SET `phonenumber`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '3 ') {
        $sql = "UPDATE `coustomer` SET `clothtype`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '2') {
        $sql = "UPDATE `coustomer` SET `lname`='$value'  WHERE `sno` = '$condition'";
    }
    else if ($status == '1') {
        $sql = "UPDATE `coustomer` SET `fname`='$value'  WHERE `sno` = '$condition'";
    }
      
    
    if (mysqli_query($db, $sql)) {
        header("location: order.php");;
        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);
    ?>
    