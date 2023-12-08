<?php
require_once 'databaseconnection.php';
//sql to creat table
$sql="CREATE TABLE logintable(
    Id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(10) NOT NULL,
    address VARCHAR(16) NOT NULL,
    password VARCHAR(80) NOT null,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
 
                 if($conn->query($sql)===TRUE)
                 {
                    echo"logintable  created sucessfully";
                  }
                   else
                     {
                    echo"error creating table:".$conn->error;
                     }
                     $conn->close();
?>                          