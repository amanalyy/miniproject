<?php
//Get username
$user = $_GET['u'];
echo "hello world";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Chatter</title>
    <link rel="stylesheet" type="text/css" media="screen" href=""/>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>

<div class='chatContainer'>
        <div class='chatHeader'>
            <h3>Welcome <?php echo ucwords($user); ?><h3>
        </div>
        <div class='chatMessage'></div>

        <div class='chatBotton'>
            <form action ='#' onsubmit='return false;' id='chatForm'>
                <input type='hidden' id='name' value='<?php echo $user; ?>'/>
                <input type='text' name ='text' id='text' value='' placeholder='Type your message'/>
                <input type='submit' name ='submit' value='Post'/>
            </form>
        </div>
                

        </div>

        
</body>
</html>