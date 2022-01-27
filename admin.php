<?php
session_start();
include 'dbconnection.php';

$email=$_POST["Email"];
$pass=$_POST["Password"];

$qry="SELECT * FROM Registration WHERE email= '".$email."' "  ;

$r=$conn->query($qry);

$row=$r->fetch();

if($row[2]==$email and $row[3]==$pass)
{
    header("location:project.php");
    
}
else
{
    header("location:admin.html");
    echo"Try again";
}





?>