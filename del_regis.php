<?php
include 'dbconnection.php';
    
    
     $query="select * from Registration";
       $result=$conn->query($query);
      
       echo "<center><table border=3><tr>";
         echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
     echo "<th>Action</th> </tr>";
       
    while($row=$result->fetch())
{  
   
  
    echo "<tr>";
    $id=$row['id'];
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td> <a href='del_regis1.php?id=$id'> Delete </a> </td>";
    echo "</tr>";
}
 echo "</table>";
?>
