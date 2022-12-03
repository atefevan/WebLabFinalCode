<html>

<head>
<link rel="stylesheet" href="index.css">
</head>
<?php
include 'connect.php';

$query = "SELECT * FROM userlist";
$run = mysqli_query($con,$query);

if(mysqli_num_rows($run) > 0){
    echo "<table><tr><th> Name </th><th> Email </th><th> Password </th></tr>";
    while($rows = mysqli_fetch_assoc($run)){
        echo "<tr><td>".$rows['name']."  "."</td><td>".$rows['email']."  "."</td><td>".$rows['pass']."</td><td><button>Edit</button><button>Delete</button></td></tr><br>";
    }
    echo "</table>";
}else{
    echo 'Error to get List !';
}
?>
</html>