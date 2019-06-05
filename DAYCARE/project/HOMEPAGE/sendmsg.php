<?php
session_start();
include 'db.php';

if (isset($_POST["posts"])){
    $name= $_SESSION['username'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO posts (id, msg) VALUES(NULL,'$msg')";
    $result = $mysqli  -> query($sql);
};
$msg=$_POST['msg'];
$name=$_SESSION['username'];

echo "$msg";
echo "$name";

    $sql = "INSERT INTO posts (id, msg, username) VALUES(NULL,'$msg','$username')";
    $result = $conn -> query($sql);
    if($result->num_rows>0){

        echo"<h1><font color=green>You are registered</font></h1>";
    /*$result = $mysqli->query("insert into posts(msg,username) values('msg','username')");
    if($result->num_rows>0){*/

       
     
       
        //header("Location:chat.php");}
        //else{
          //  echo"<h1><font color=red>You are not registered</font></h1>";
        //}
    
?>
