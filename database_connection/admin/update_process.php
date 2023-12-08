<?php 
 require_once 'check_session.php';
 require_once 'databaseconnectio';
 if(isset($_POST['name'])){
     $Id    =$_POST['Id'];
	$name   =$_POST['name'];
	$address =  $_POST['address'];
	$email  = $_POST['email'] ;
	$reg_date=$_POST['reg_data'];
 }
	
	$sql ="UPDATE stuinfo1 SET name='$name', address='$address', email='$email', reg_data='$reg_date' where Id=$Id";
	$result= $conn->query($sql);
  
	if($conn->query($sql)===TRUE)
	{
		echo"new record update successfully";
		header ('Location:select.php?success= record updated');
			exit();

	}
	else
	{
		echo"error:".$sql."<br>" .$conn->error;
	}
?>