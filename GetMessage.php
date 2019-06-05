<?php
 echo "hello world";
$db = new PDO('mysql:host=127.0.0.1;dbname=Chat','root', ' ');

$query = $db->prepare("SELECT * FROM messages");
$aquery->execute();
while($fetch = $query->fetch(PDO::FETCH_ASSOC))
{
    $name = $fetch['name'];
    $message = $fetch['message'];


    echo "<li class='cm'><b>".ucwords($name)."</b> = ".$message."</li>";
    

?>


