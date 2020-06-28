<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$Birth=$_POST['Birth'];
$Comp_Address=$_POST['Comp_Address'];
$phone=$_POST['phone'];


$conn = new mysqli('localhost','root','','address_book');

if($conn->connect_error){
    die('Connection Faild:'.$conn->connect_error);

}else{
 $stmt =  $conn->prepare("insert into data_table(firstname,lastname,email,Birth,Comp_Address,phone)
  values(?,?,?,?,?,?)");
  $stmt->bind_param("sssssi",$firstname,$lastname,$email,$Birth,$Comp_Address,$phone);
  $stmt->execute();
  echo "Address added";

  $stmt->close();
  $conn->close();
}


?>
<!-- Asim Javed CS-172120 -->