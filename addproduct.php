<html>

<body>

   
    <?php
    include("dbcon.php");
    $fname =  $_REQUEST['title'];
    $lname =  $_REQUEST['description'];
    $clothtype =  $_REQUEST['Price'];
    $phonenumber =  $_REQUEST['commission'];
    
    $sql = "INSERT INTO `products` ( `tite`, `description`, `price`, `comission`) VALUES ('$fname','$lname','$clothtype','$phonenumber')";

    if (mysqli_query($db, $sql)) {
        header("location: productfetch.php");;
        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);
    ?>
    

</body>

</html>