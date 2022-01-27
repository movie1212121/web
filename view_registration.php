<?php
include 'dbconnection.php';

$qry="select * from Registration";
$result=$conn->query($qry);

while($row=$result->fetch())
{  
    echo "<center><table border=3><tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th> </tr>";
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
    echo "</table>";
}
echo "<a href='registration.html'> Go Back </a> ";
?>