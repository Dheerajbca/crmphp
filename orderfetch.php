<html>
  <body>
<?php
  include("dbcon.php");
   
   $sql = "SELECT * FROM `coustomer`";
   $retval = mysqli_query( $db, $sql );
     echo"
   <table>
      <tr>
      <th>S.NO </th>
      <th> Date </th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Product Type</th>
      <th>Phone Number</th>
      <th>E-Mail</th>
       <th> Manager</th>
      <th> leadcomments </th>
      <th> Payment Status </th>
      
      
      </tr>";
   
   while($row = mysqli_fetch_array($retval)) {
      echo "<tr>
      <td>{$row['sno']} </td>".
      "<td> {$row['Date']}  </td>".
       "<td> {$row['fname']}  </td> ".
       "<td> {$row['lname']}  </td> ".
         "<td> {$row['clothtype']}  </td> ".
         "<td> {$row['phonenumber']}  </td> ".
         " <td> {$row['email']} </td>".
         " <td> {$row['administrationname']} </td>",
         
         " <td> {$row['leadcomments']} </td>",
         " <td> {$row['Payment Status']} </td>
        

         </tr>
         ";
         
   }
   
   
   mysqli_close($db);
?>
</body>
</html>