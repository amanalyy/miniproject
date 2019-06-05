<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Chatter</title>
<link rel="stylesheet" type="text/css" media="screen" href='css/style.css'/>
<?php
 echo "hello world";
 $conn = mysqli_connect("localhost", "root", "");
 if(mysqli_select_db($conn, "DAYCARE")){
     echo "tinie tempah";
 }
 
 //$result = mysqli_query($conn, "SELECT * FROM Chat where name = '$username' and message = '$message'");
 if(isset($_POST['post'])){
    $username = $_POST['username'];
    $message = $_POST['message'];

    $insert = "INSERT INTO `Chat`(`name`, `message`) VALUES ('$username', '$message')";
    $run = mysqli_query($conn, $insert);
 }
 $select = "SELECT * FROM Chat";
 $qresult = mysqli_query($conn, $select);
 while ($row = mysqli_fetch_assoc($qresult)){
     $username = $row['username'];
     $message = $row['message'];
 }
 echo $username. "<br>";
 echo $message. "<br>";
/*$db = new PDO('mysql:host=127.0.0.1;dbname=Chat','root', ' ');

$query = $db->prepare("SELECT * FROM messages");
$aquery->execute();
while($fetch = $query->fetch(PDO::FETCH_ASSOC))
{
    $name = $fetch['name'];
    $message = $fetch['message'];

}


    echo "<li class='cm'><b>".ucwords($name)."</b> = ".$message."</li>";*/

?>
</head>
<body>
<div class='chatContainer'>
        <div class='chatHeader'>
            <h3>Welcome <?php echo ucwords($user); ?><h3>
        </div>
        <div class='chatMessage'></div>

        <div class='chatBotton'>
            <form action ='GetMessages.php' method="POST">
                <input type='text' name="username" id='name'/>
                <input type='text' name ='message' id='text' value='' placeholder='Type your message'/>
                <input type='submit' name ='post' value='Post'/>
            </form>
        </div>
        </div>
</body>
</html>