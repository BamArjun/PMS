<?php
session_start();
If(isset($_SESSION['userid']))
{
    herader('location:dashbord.php');
    exit();

}
if(isset($_POST["email"])){
    require_once 'databaseconnection.php';
    $username= $_POST['email'];
    $password=$_POST['password'];
    $password=sha1($password);

    $sql="SELECT * from logintable where email='$username' and password='$password'";
    $result=$conn->query($sql);
    //die($sql);
    if($result->num_rows == 1)
    {
    $row =$result->fetch_assoc();
    $_SESSION['userid']=$row['Id'];
    $_SESSION['username']=$row['username'];
    header('location:dashboard.php');
    exit(); 
    // echo"log in successful";
    }
    else{
        //echo "invalide username and password";
        $error_message='invalide username and password';
    }
}
?>
<h1> login</h1>
<?php
if(isset($error_message)){
    ?>
    <div style "border:1px";>
        <?php
        echo $error_message;
        ?>
        </div>
  <?php }
  ?>
<form name="login" method="post" action="">
username:  <input type="email" name="email"><br>
password:  <input type="password" name="password"><br>

    <input type="submit" name="submit" value="submit">                 
</form>
