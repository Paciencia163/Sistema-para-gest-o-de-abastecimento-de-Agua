<?php
session_start(); 
$error = ''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else{

$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "water");
$query = "SELECT * FROM `reg` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

$q = " SELECT `email`, `phone`, `address`, `password`";
$queryfire = mysqli_query($conn, $q);
$reg = mysqli_fetch_array($queryfire);

if ($count == 1){
$_SESSION['logged']=true; 
$_SESSION['login_user'] = $username;
$_SESSION['login_address']=$reg['address'];
$msg = 'Login Complete! Thanks';
     echo "<script> window.location.assign('user.php');</script>";

}else{
$_SESSION['logged']=false;
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";

}
}
mysqli_close($conn); 
}
?>