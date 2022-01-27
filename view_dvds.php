<?php
include 'dbconnection.php';

$qry="select * from Add_dvd";
$result=$conn->query($qry);

while($row=$result->fetch())
{  
    echo "<center><table border=4><tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Genere</th>";
    echo "<th>Release Data</th> </tr>";
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['genere'] . "</td>";
    echo "<td>" . $row['r_date'] . "</td>";
    echo "</tr>";
    echo "</table>";
}
echo "<a href='dvd.php'> Go Back </a> ";
?>