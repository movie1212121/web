<?php
include 'dbconnection.php';
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$qry="insert into Registration values ($id,'$name','$email')";

$result=$conn->query($qry);
if($result){
    echo "<h4> Inserted Successfully </h4>";
}
else{
    echo " Didnot Insert";
}

echo "<a href='registration.php'><button> Go Back </button></a>";
?>