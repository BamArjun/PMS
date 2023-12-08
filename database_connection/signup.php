<?php
if(isset($_POST["username"])){
    require_once 'databaseconnection.php';
    $username= $_POST['username'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $password=sha1($password);

    $sql = "INSERT INTO logintable( email, password, address) 
    VALUES ('$username','$password', '$address' )";
    if($conn->query($sql)===TRUE)
    {
        //echo"new record created successfully";
       // header (
         //   'Location:insert.php?success= new record added');
        //exit();

    }
    else
    {
        echo"error:".$sql."<br>" .$conn->error;
    }
}
?>
<form name="signup" method="post" action=""> 	
username:  <input type="email" name="username"><br>
password:  <input type="password" name="password"><br>
address:  <input type="text" name="address"><br>

    <input type="submit" name="submit" value="submit">                 
</form>
