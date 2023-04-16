<html>

<body>

   
    <?php
    include("dbcon.php");
    $fname =  $_REQUEST['username'];
    $lname =  $_REQUEST['password'];
    
    
    $sql = "INSERT INTO `managers`( `username`, `password`) VALUES('$fname','$lname')";

    if (mysqli_query($db, $sql)) {
        header("location: manageradmin.php");;
        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);
    ?>
    

</body>

</html>