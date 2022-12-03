<?php
include 'connect.php';

$userName = $_POST['fname'];
$userEmail = $_POST['femail'];
$userPass = $_POST['fpass'];

mysqli_select_db($con,$db);
$query = "INSERT INTO userlist (name,email,pass) values ('$userName','$userEmail','$userPass')";
$run = mysqli_query($con,$query);

if(!$run){
    echo 'Error to push in database !';
}else{
    header("Location: list.php");
    exit();
}
?>