<?php
session_start();
If(isset($_SESSION['userid']))
{
    herader('location:index.php');
    exit();

}
?>