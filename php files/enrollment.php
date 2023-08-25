<!-- <!DOCTYPE html> -->
<?php
    $studentName = $_POST['studentName'];
	$course =$_POST['course'];
    $price =$_POST['price'];
    $emailAddress =$_POST['emailAddress'];
    $phone =$_POST['phone'];
    $cnic =$_POST['cnic'];
    $address =$_POST['address'];

 //database connection here
 $con =new mysqli("localhost","root","","techno_spot");


 if($con->connect_error){
 die("failed");
 }

 else{
$stmt =$con->prepare("INSERT INTO `enrollment` (`studentName`,`course`, `price`,`emailAddress`,`phone`,`cnic`,`address`) VALUES ('$studentName','$course', '$price','$emailAddress','$phone','$cnic','$address')");
  $stmt->execute();
//   header('location:login.html');
 }
?>