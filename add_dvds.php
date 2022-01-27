<?php
include 'dbconnection.php';
$id=$_POST["id"];
$name=$_POST["name"];
$genere=$_POST["genere"];
$release_date=$_POST["r_date"];
$qry="insert into Add_dvd values ($id,'$name','$genere', '$release_date')";

$result=$conn->query($qry);
if($result){
    echo "<h4> Inserted Successfully </h4>";
}
else{
    echo " Didnot Insert";
}

echo "<a href='dvd.html'><button> Go Back </button></a>";
?>