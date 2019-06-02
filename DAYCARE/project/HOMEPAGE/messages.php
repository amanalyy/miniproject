
<?php
    session_start();
    $user = $_SESSION['username'];
  

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Chat</title>
    <link rel="stylesheet" type="text/css" media="screen" href="chat.css" />
    <script src="main.js"></script>

    </head>
    <body>
    <div class="box">
    <div id="main">
    <h1 style = "background-color:palevioletred; color: white;">-online</h1>
        <div class="output">
            <p><?=$user?></p>
        </div>
    <form action="sendmsg.php" method= "post">
    <textarea name="msg" placeholder="Type your message ..." class="form-control"></textarea><br><br><br>
        <input type="submit" value="Send" name="posts">
        </form>
        <br>
        <form action="logout.php">

        
        
        <input style="width: 100%; background-color: palevioletred; color:white; font-size:20px;" type="submit" value="Logout">
    

</form>
</div>
</div>
</body>
</html>