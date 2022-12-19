<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];
$conn = new mysqli('localhost','root','','hotel');
if($conn->connect_error){
    die('Connect failed:'.$conn->connect_error);
}else{
    $stmt = $conn ->prepare("insert into login(f_name,l_name,MAIL_ID,age) value(?,?,?,?);");
    $stmt->bind_param("sssi",$fname,$lname,$email,$age);
    $stmt-> execute();
    echo "<h2>thank you for logging in<h2>";
    $stmt->close();
    $conn->close();
    header("Location: booking.php") ;
    
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="booking.php" method="post">

</form>
</body>
</html>