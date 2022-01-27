<?php
include 'dbconnection.php';

$i=$_GET['id'];
$q="Delete from Add_dvd where id=$i";

$result=$conn->query($q);

if($result==TRUE)
{
    echo"Deleted Successfully";
}
else
{
    echo"Not Deleted";
}




?>