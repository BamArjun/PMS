<?php
     $servername="localhost";
     $username="root";
     $password="";
     $database="student";
  //creating connection
  $conn=new mysqli($servername,$username,$password,$database);
  //check connection
  if ($conn->connect_error)
       {
        die("connectionfailed".$conn->connect_error);
       }   
       else
       {
        echo'datebase connection success <br></br>';
       }
       ?>