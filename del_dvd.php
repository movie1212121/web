<?php
include 'dbconnection.php';
    
    
     $query="select * from Add_dvd";
       $result=$conn->query($query);
      
       echo "<center><table border=3><tr>";
         echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Genere</th>";
    echo"<th>Release Date</th>";
     echo "<th>Action</th> </tr>";
       
    while($row=$result->fetch())
{  
   
  
    echo "<tr>";
    $id=$row['id'];
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['genere'] . "</td>";
    echo"<td>" .$row['r_date']. "</td>";
    echo "<td> <a href='del_dvd1.php?id=$id'> Delete </a> </td>";
    echo "</tr>";
}
 echo "</table>";
?>
