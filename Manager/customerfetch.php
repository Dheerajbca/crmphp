<?php
  include("../dbcon.php");
   
   $sql = "SELECT * FROM `coustomer` where `administrationname`  = 'dheeraj'";
   $retval = mysqli_query( $db, $sql );
     echo"
   <table>
      <tr>
      <th>S.NO </th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone Number</th>
      <th>E-Mail</th>
      <th>Address</th>
      <th>Address 2</th>
      <th>Country</th>
      <th>State</th>
      <th> Zip Code </th>
      </tr>";
   
   while($row = mysqli_fetch_array($retval)) {
      echo "<tr>
      <td>{$row['sno']} </td>".
       "<td> {$row['fname']}  </td> ".
       "<td> {$row['lname']}  </td> ".  
         "<td> {$row['phonenumber']}  </td> ".
         " <td> {$row['email']} </td>".
         " <td> {$row['address']}  </td>".
         " <td> {$row['address2']}  </td>",
         " <td> {$row['country']}  </td>",
         " <td> {$row['state']} </td>",
         " <td> {$row['zip']}  </td>
         </tr>
         ";
         
   }
   
   
   mysqli_close($db);
?>