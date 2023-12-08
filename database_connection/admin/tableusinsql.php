<?php
require_once 'databaseconnection.php';
//sql to creat table
$sql="CREATE TABLE stuinfo1(
    Id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(10) NOT NULL,
    address VARCHAR(16) NOT NULL,
    email VARCHAR(20) NOT null,
    reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
 
                 if($conn->query($sql)===TRUE)
                 {
                    echo"table stuinfo1 created sucessfully";
                  }
                   else
                     {
                    echo"error creating table:".$conn->error;
                     }
                     $conn->close();
?>                          