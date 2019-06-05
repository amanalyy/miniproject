<?php
include 'db.php' ;
$uname=$_POST['uname'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$health=$_POST['health'];
$fname=$_POST['name'];
$urstel=$_POST['urstel'];
$email=$_POST['email'];
$address=$_POST['address'];
$waddress=$_POST['waddress'];
$mname=$_POST['mname'];
$urtel=$_POST['urtel'];
$emaill=$_POST['emaill'];
$address1=$_POST['address1'];
$waddress1=$_POST['waddress1'];
$psw=$_POST['psw'];


$sql="INSERT INTO signup(fullname, dob, gender, health, fname, fphone, femail, haddress, workaddress, mname, mphone, memail, mhaddress, mwaddress, password)
VALUES('$uname', '$date', '$gender', '$health', '$fname', '$urstel', '$email', '$address', '$waddress', '$mname', '$emaill', '$address1', '$waddress1', '$psw')";

$result = $conn -> query($sql);
//$run = mysqli_query($conn, $sql);
//if($run){
    header("Location:indx.php");
//}
?> 

