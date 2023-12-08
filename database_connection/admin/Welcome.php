<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: logintable.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title> 
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: red;}

.dropdown:hover .dropdown-content {
  display: block;
  background-color: red;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body bgcolor="green">

    <header class="header">
      <a href="#" class="logo">Admission Management<span>System</span></a>
      <a class="menu fas fa-bars"></a>
      <nav class="navbar">
        <a href="#">home</a>
        <a href="#about">about</a>
        <a href="#services">catagory</a>
        <a href="#contact">contact</a>
        <div class="dropdown">
  <button class="dropbtn">Welcome <?php  
echo $_SESSION['email'];  
?> </button>
  <div class="dropdown-content">
  <a href="logout.php"> Log Out</a>
  </div>
</div>
      </nav>
    </header>

</body>
</html>