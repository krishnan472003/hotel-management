<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$coming = $_POST['coming'];
$going = $_POST['going'];
$room = $_POST['room'];
$adhaar = $_POST['adhaar'];
$number = $_POST['no'];
$age = $_POST['age'];
if(isset($coming)){
    $conn = new mysqli('localhost','root','','hotel');
if($conn->connect_error){
    die('Connect failed:'.$conn->connect_error);
}else{
    $stmt = $conn ->prepare("insert into booking(coming,going,adhaar_number,F_name,l_name,phone_no,room_type,age) value(?,?,?,?,?,?,?,?);");
    $stmt->bind_param("ssissisi",$coming,$going,$adhaar,$fname,$lname,$number,$room,$age);
    $stmt-> execute();
    $stmt->close();
    $conn->close();
    header("Location: success.php") ;  
} 
}
else{
    header("Location: failed.php") ;  

}

?>