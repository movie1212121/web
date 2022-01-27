<?php
include 'dbconnection.php';

$i=$_GET['id'];
$q="Delete from Registration where id=$i";

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