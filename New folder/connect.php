
<?php
echo $uname;
$uname = $_POST['uname'];
$email = $_POST['email'];
$nmessage = $_POST['nmessage'];

$conn = new mysqli('localhost','root','','hotel');
if($conn->connect_error){
    die('Connect failed:'.$conn->connect_error);
}else{
    $stmt = $conn ->prepare("insert into feedback(uname,email,nmessage) value(?,?,?);");
   $stmt->bind_param("sss",$uname,$email,$nmessage);
   $stmt-> execute();
   echo "done";
   $stmt->close();
   $conn->close();
} 
?>

