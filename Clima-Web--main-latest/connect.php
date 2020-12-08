<?php
$name=$_REQUEST['plc'];
$conn=new mysqli("localhost","root","","checkedplaces");

if($conn->connect_error){
    die('connection failed  :'.$conn->connect_error);
}else{
   
    $stmt = $conn->prepare("insert into location(PLACE) values (?);");
    $stmt->bind_param("s",$name);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
}
?>