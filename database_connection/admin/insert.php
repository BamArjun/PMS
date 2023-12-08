<?php
require_once 'databaseconnection.php';
if(isset($_POST['name']))
{
   // $ID    =$_POST['Id'];
	$name   =$_POST['name'];
	$address =  $_POST['address'];
	$email  = $_POST['email'] ;
	$reg_date=$_POST['reg_data'];
    
    /*
   echo	$ID.'</br>';
   echo	$name.'</br>';
   echo	$address.'</br>';
   echo	$email.'</br>';
   echo	$reg_date.'</br>';
   */
 
$sql = "INSERT INTO stuinfo1( name, address, email) 
        VALUES ('$name', '$address', '$email' )";
		if($conn->query($sql)===TRUE)
	    {
			//echo"new record created successfully";
			header (
				'Location:select.php?success= new record added');
			exit();

		}
		else
		{
			echo"error:".$sql."<br>" .$conn->error;
		}
	}
?>
<form name="registrattion" method="post">
	<!--ID :  <input type="number"name="Id"><br>--> 	
	name   :  <input type="text" name="name"><br>
	address:  <input type="text" name="address"><br>
	email  :  <input type="email" name="email"><br>
	reg_date: <input type="date"  name="reg_data"><br>
	
		<input type="submit"name="submit" value="submit">                 
</form>
