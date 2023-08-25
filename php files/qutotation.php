<!-- <!DOCTYPE html> -->
<?php
    $qutotationname = $_POST['qutotationname'];
	  $qutotationemail =$_POST['qutotationemail'];
    $qutotationphone =$_POST['qutotationphone'];
    $qutotationdetails =$_POST['qutotationdetails'];
    
 //database connection here
 $con =new mysqli("localhost","root","","techno_spot");


 if($con->connect_error){
 die("failed");
 }

 else{
$stmt =$con->prepare("INSERT INTO `qutotation` (`name`,`emailaddress`, `phonenumber`,`details`) VALUES ('$qutotationname','$qutotationemail', '$qutotationphone','$qutotationdetails')");
  $stmt->execute();
//   header('location:login.html');
 }
?>