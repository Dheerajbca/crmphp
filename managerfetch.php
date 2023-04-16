<html>
  <body>
<?php
  include("dbcon.php");
   
   $sql = "SELECT * FROM `managers`";
   $retval = mysqli_query( $db, $sql );
     echo"
   <table>
      <tr>
      <th>S.NO </th>
      <th> Date </th>
      <th>User name</th>
      <th>Password</th>
      
      
      </tr>";
   
   while($row = mysqli_fetch_array($retval)) {
      echo "<tr>
      <td>{$row['sno']} </td>".
      "<td> {$row['date']}  </td>".
        " <td> {$row['username']} </td>",
         " <td> {$row['password']} </td>
        

         </tr>
         ";
         
   }
   
   
   mysqli_close($db);
?>
</body>
</html>