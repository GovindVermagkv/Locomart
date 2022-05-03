<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locomart /Signup</title>
</head>
<body>
    

<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_database="locomart";

$conn= mysqli_connect($db_hostname,$db_username,$db_password,$db_database);
?>

<h1 style="text-align:center; color:red;">

<?php
if(!$conn){
    echo "connection failed".mysqli_connect_error();
    exit;
}

$name=$_POST["Name"];
$phone_number=$_POST["phone_number"];
$email=$_POST["Email"];
$password=$_POST["Password"];

$sql="INSERT INTO `users` (`Name`, `phone number`, `Email`, `Password`) VALUES ('$name', '$phone_number', '$email', '$password')";

$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Email Already Exist.";
    exit;
}
else{
    echo "Account created Successfully.";
}
?>
<a href="login.php">login here</a>











</h1>
</body>
</html>