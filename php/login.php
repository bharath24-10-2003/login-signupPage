<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con=mysqli_connect("localhost","root","","login");
$sql="SELECT * from users WHERE  name='$username' AND password='$password'";
$result=mysqli_query($con,$sql);
$resultcheck=mysqli_num_rows($result);
if($result>0)
{
    header("Location: profile.html");
    exit;
}
else
{
    echo "User name or password is Incorrect";
}
?>
