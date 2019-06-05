<!DOCTYPE html>
<html>
<head>
    <title>Webchat</title>
</head>
<body>
    <div id="main">
    <div id="info">
        <h2>LOGIN</h2>

         <form action="login.php" method="post">
         <label><b>Username<b></label>
         <input type = "text" name="uname"> <br><br>
         <label><b>Password<b></label>
         <input type = "text" name="pass"> <br><br>
         <button style=" background-color:#6495ed; color:white; " type="submit"><b>Login</b></button>
        
        </form>


        
        <form action="signup2.php" method="post">
        <h2>Don't have an account?? signup here</h2>
        <label><b>Username<b></label>
        <input type = "text" name="uname"> <br><br>
        <label><b>Email<b></label>
        <input type = "text" name="Email"> <br><br>
        <label><b>Password<b></label>
        <input type = "text" name="Password"> <br><br>
        <button style=" background-color:#6495ed; color:white; " type="submit"><b>Signup</b></button>

            
      </form>


    </div>
    </div>
</body>
<html>
    
<?php 
    


?>