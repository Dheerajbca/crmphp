<html>
  <body>
            <?php
  include("dbcon.php");
   
   $sql = "SELECT * FROM `products`";
   $retval = mysqli_query( $db, $sql );
     echo"
   <table>
      <tr>
      <th>S.NO </th>
      <th> Title </th>
      <th>Description</th>
      <th>Price</th>
      <th>Commission</th>
      
      
      
      </tr>";
   
   while($row = mysqli_fetch_array($retval)) {
      echo "<tr>
      <td>{$row['sno']} </td>".
      "<td> {$row['tite']}  </td>".
       "<td> {$row['description']}  </td> ".
       "<td> {$row['price']}  </td> ".
         "<td> {$row['comission']}  </td> 
        

         </tr>
         ";
         
   }
   
   
   mysqli_close($db);
?>
</body>
</html>