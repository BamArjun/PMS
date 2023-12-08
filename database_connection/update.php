<?php
  require_once 'databaseconnection.php';
  $id=$_GET['Id'];
  $sql = "SELECT * from stuinfo1 where Id= $id";
  
  $result= $conn->query($sql);
  
  if($result->num_rows > 0)
      {
          //output data of each row
          $row=$result->fetch_assoc();
    }
    $conn->close();
		
?>
<form name="registration" method="post" action="update_process.php">
    <input type="hidden"name="Id" value="<?php echo $row["Id"]; ?>"><br>
	name   :  <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br>
	address:  <input type="text" name="address" value="<?php echo $row["address"]; ?>"><br>
	email  :  <input type="email" name="email" value="<?php echo $row["email"]; ?>"><br>
	reg_date: <input type="date"  name="data"  value="<?php echo $row["reg_data"]; ?>"><br>
	
		<input type="submit"name="submit" value="submit">                 
</form>