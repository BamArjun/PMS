<?php

require_once 'check_session.php';
require_once 'databaseconnectio';
  $Id=$_GET['Id'];
  $sql = "DELETE from stuinfo1 where Id= $Id";
		if($conn->query($sql)===TRUE)
	    {
			//echo"new record created successfully";
			header ('Location:select.php?success= record deleted');
			exit();

		}
		else
		{
			echo"error:".$sql."<br>" .$conn->error;
		}
?>