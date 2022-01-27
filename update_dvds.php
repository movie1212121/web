<?php

include 'dbconnection.php';

if(isset($_POST['update'])){

$i=$_POST['id'];
$n=$_POST['name'];
$e=$_POST['genere'];
$r=$_POST['r_date'];

$find_id="select id from Add_dvd where id=$i";

$res_id=$conn->query($find_id);
while($row=$res_id->fetch()){
    $r_id=$row['id'];
}
if(isset($r_id)){
   
    $q="update Add_dvd set name='$n',genere='$e', r_date='$r' where id=$i";
     
    $result=$conn->query($q);
        
    echo "<script>alert('Updated Successfully') </script>";
}
else{
     echo "<script> alert('Invalid ID') </script>";
}


}

?>


<h2><center>Update Movies Info</center></h2>
<form action="" method=post>
   
    <label for="name">Enter ID </label>
    <input type="numeric" name="id" required placeholder='Enter Your Current ID' />
    <br><br>
    
    <label for="name">Name</label>
    <input type="text" name="name" required placeholder='Enter Your New Name'/>
    <br><br>
    
    <label for="genere">Genere</label>
    <input type="text" name="genere" required placeholder='Enter Your New Genere'/>
    
    <br><br>
    <label for="r_date">Release Date</label>
    <input type="text" name="r_date" required placeholder='Enter the New Release Date'/>
    
    <br><br>
    <a href="dvd.html"><button class ="button">Go Back</a></button>
    
    <br><br>
    <input type="submit" value="update" name="update" />
    
</form>
