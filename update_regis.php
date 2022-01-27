<?php

include 'dbconnection.php';

if(isset($_POST['update'])){

$i=$_POST['id'];
$n=$_POST['name'];
$e=$_POST['email'];

$find_id="select id from Registration where id=$i";
$res_id=$conn->query($find_id);
while($row=$res_id->fetch()){
    $r_id=$row['id'];
}
if(isset($r_id)){
   
    $q="update Registration set name='$n',email='$e' where id=$i";
     
    $result=$conn->query($q);
        
    echo "<script>alert('Updated Successfully') </script>";
}
else{
     echo "<script> alert('Invalid ID') </script>";
}


}

?>


<h2><center>Update Data of User</center></h2>
<form action="" method=post>
   
    <label for="name">Enter ID </label>
    <input type="numeric" name="id" required placeholder='Enter Your Current ID' />
    <br><br>
    
    <label for="name">Name</label>
    <input type="text" name="name" required placeholder='Enter Your New Name'/>
    <br><br>
    
    <label for="email">Email</label>
    <input type="email" name="email" required placeholder='Enter Your New Email'/>
    
    <br><br>
    <input type="submit" value="update" name="update" />
    
</form>
