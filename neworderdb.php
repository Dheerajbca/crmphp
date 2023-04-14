<html>

<body>

   
    <?php
    include("dbcon.php");
    $fname =  $_REQUEST['fname'];
    $lname =  $_REQUEST['lname'];
    $clothtype =  $_REQUEST['clothtype'];
    $phonenumber =  $_REQUEST['phonenumber'];
    $email =  $_REQUEST['email'];
    $address =  $_REQUEST['address'];
    $address2 =  $_REQUEST['address2'];
    $country =  $_REQUEST['country'];
    $state =  $_REQUEST['state'];
    $zip =  $_REQUEST['zip'];
    $payment =  $_REQUEST['payment'];
    $leadtype =  $_REQUEST['leadtype'];
    $administratorname =  $_REQUEST['administratorname'];
    $leadscomment =  $_REQUEST['leadscomment'];
    
    $sql = "INSERT INTO `coustomer`( `fname`, `lname`, `clothtype`, `phonenumber`, `email`, `address`, `address2`, `country`, `state`, `zip`, `leadcomments`, `administrationname`, `leadtype`, `Payment Status`) 
     VALUES ('$fname','$lname','$clothtype','$phonenumber','$email','$address','$address2'
     ,'$country','$state','$zip','$leadscomment', '$administratorname', '$leadtype', '$payment')";

    if (mysqli_query($db, $sql)) {
        header("location: dashbord.php");;
        
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($db);
    }

    // Close connection
    mysqli_close($db);
    ?>
    

</body>

</html>