<?php
session_start();
session_destroy();
header('location:index.php?message=user logged out successful');
exit();
?>