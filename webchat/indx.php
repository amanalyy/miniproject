<!DOCTYPE html>
<html>
    <head>
            <link rel = "stylesheet" type = "text/css" href = "log.css"/>  
            
    </head>

    <body>
        <div class="boxx">
            <div class="formm">
                <h2>SIGN-UP</h2>
                    <form action="signup.php" method="post">
                        <fieldset>
                            <legend> Child's Detail </legend>
                
                            <div class = "inputBox">
                                <label> Fullname</label>
                                <input type="text" name="uname" required=""></div>
                                
                                <label for="date">Date of Birth</label>
                                <input type="date" name="date"><br><br>

                                <label for="gender">Gender</label>
                                <input type="radio" name="gender"value="male" checked > Male 
                                <input type="radio" name="gender" value="female" > Female <br><br>

                                <div class = "inputBox">
                                <label>Health detail</label>
                                <input type="text" name="health" required=""></div>
                                
                        </fieldset><br>
                
                        <fieldset>
                            <div class="inputBox">
                            <legend>Parent's Detail</legend>
                            <label>Father's Name</label>
                                <input type="text" name="name">
                                Telephone<input type = "tel" 
                                name="urstel"><br>
                                Email<input type = "email"
                                name="email"></div>
                                <label for="address" name="address">Home Address</label>
                                <textarea cols = "15" rows = "5"> </textarea><br><br>
                                <label for="address" name="waddress">Work Place Address</label>
                                <textarea cols = "15" rows = "5"> </textarea>
                                <hr>
                                <div class="inputBox">
                                <label for="mname">Mother's Name</label>
                                <input type="text" name="name">
                                Telephone<input type = "tel" 
                                name="urtel"><br>
                                Email <input type = "emaill"
                                name="emaail"></div>
                                <label for="address" name="address1">Home Address</label>
                                <textarea cols = "15" rows = "5"> </textarea><br><br>
                                <label for="address" name="waddress2"> Work Place Address</label>
                                <textarea cols = "15" rows = "5"> </textarea><br><br>
                                <label>password</label>
                                <input type="password" name="psw" required=""></div>
                            </fieldset>
                           
                            <br>
             <div>
                <input type="submit" name="" value="Submit"> <br><br>
            </div>
                        
            
                            
                        </form>
                        </div>
         </div>
                
    </body>
</html>