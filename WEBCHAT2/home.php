<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <div id="main">

        <h1 style="background-color: #6495ed; color: white;"> <?php echo $_SESSION['username']?>-online </h1>

        <div class="output">

        </div>

        <form method="post" action="send.php">
            <textarea name="msg" placeholder="Type to send message....."
            class="form-control"></textarea><br>
            <input type="submit" value="Send">
        </form>
        <br>
        <form action="logout.php">
        
        <input style="width: 100%; background-color: #6495ed; color:white; font-size:20px;" type="submit" value="Logout">

</body>
</html>