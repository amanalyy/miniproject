<?php 
    session_start();

?>
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
                                <input type="text" name="uname" required></div>
                                
                                <label for="date">Date of Birth</label>
                                <input type="date" name="date"><br><br>

                                <label for="gender">Gender</label>
                                <input type="radio" name="gender" value="Male" checked > Male 
                                <input type="radio" name="gender" value="Female" > Female <br><br>

                                <div class = "inputBox">
                                <label>Health detail</label>
                                <input type="text" name="health" required></div>
                                

                                
                            
                                
                            </fieldset><br>
                
                            <fieldset>
                                <div class="inputBox">
                                <legend>Parent's Detail</legend>
                                
                                <label>Father's Name</label>
                                <input type="text" name="fname">
                                
                                Telephone<input type ="tel" name="ftel"><br>
                                
                                Email<input type = "email" name="femail"></div>
                                
                                <label for="address">Home Address</label>
                                <textarea cols = "15" rows = "5" name="home_addr"> </textarea><br><br>
                                
                                <label for="address">Work Place Address</label>
                                <textarea cols = "15" rows ="5" name="work_addr"> </textarea>
                                <hr>
                                
                                <div class="inputBox">
                                <label for="name">Mother's Name</label>
                                <input type="text" name="mname">
                                
                                Telephone<input type ="tel" name="mtel"><br>
                                
                                    Email <input type ="email" name="memail"><br />
                                    Password <input type ="password" name="password"><br />
                                    Confirm <input type ="password" name="confirm"><br />

                                </div>
                                
                                <label for="address">Home Address</label>
                                <textarea cols = "15" rows ="5" name="hoaddr"> </textarea><br><br>
                                
                                <label for="address">Work Place Address</label>
                                <textarea cols = "15" rows ="5" name="woaddr"> </textarea><br><br>
                            
                            </fieldset>
                            
                           
                            <br>
             <div>
                <input type="submit" name="signed" value="Submit"> <br><br>
                </form>
            </div>
                        
            
                            
                        
                        </div>
         </div>
                
    </body>
</html>
<?php
    ini_set('display_errors', 1);
    include('db.php');

    $sdf = $_SESSION['username'];
    echo"<h1>$sdf</h1>";

    if(isset($_POST['signed'])){

        $cname =$_POST['uname'];
        $dob =$_POST['date'];
        $femail = $_POST['femail'];
        $memail = $_POST['memail'];
        $mname = $_POST['mname'];
        $fname =$_POST['fname'];
        $f_phone =$_POST['ftel'];
        $m_phone = $_POST['mtel'];
        $faddr = $_POST['home_addr'];
        $fwork_add = $_POST['work_addr'];
        $maddr = $_POST['hoaddr'];
        $mwork = $_POST['woaddr'];
        $gender = $_POST['gender'];
        $hdetail = $_POST['health'];
        $password = md5($_POST['password']);

        if($_POST['password'] == $_POST['confirm']){

            $save = $mysqli->query("INSERT INTO signup (fullname, dob, gender, health, fname, fphone, femail, haddress, workaddress, mname, mphone, memail, mhaddress, mwaddress, password) VALUES 
            ('$cname', '$dob', '$gender', '$hdetail', '$fname', '$f_phone', '$femail', '$faddr', '$fwork_add', '$mname', '$m_phone', '$memail', '$maddr', '$mwork', '$password')");
            if($save==true){
                echo"<h3 align=center><font color=green>Thanks for signing </font></h3>";
            }else{
                echo"<h3 align=center><font color=red>Try again!</font></h3>";
            }

        }else{
            echo"<h3><font color=red>Passwords donot match</font></h3>";
        }

        
        // echo"<h1>

        //     $cname<br />
        //     $dob <br />
        //     $femail <br />
        //     $memail <br />
        //     $mname <br />
        //     $fname <br />
        //     $f_phone <br />
        //     $m_phone <br />
        //     $faddr <br />
        //     $fwork_add<br />
        //     $maddr <br />
        //     $mwork<br />
        //     $gender<br />
        //     $hdetail<br />
        //     $password

        // CREATE TABLE `signup` (
        //     `id` int(11) NOT NULL AUTO_INCREMENT,
        //     `fullname` varchar(50) NOT NULL,
        //     `dob` date NOT NULL,
        //     `gender` varchar(50) NOT NULL,
        //     `health` varchar(50) NOT NULL,
        //     `fname` varchar(50) NOT NULL,
        //     `fphone` int(50) NOT NULL,
        //     `femail` varchar(50) NOT NULL,
        //     `haddress` varchar(50) NOT NULL,
        //     `workaddress` varchar(50) NOT NULL,
        //     `mname` varchar(50) NOT NULL,
        //     `mphone` int(50) NOT NULL,
        //     `memail` varchar(50) NOT NULL,
        //     `mhaddress` varchar(50) NOT NULL,
        //     `mwaddress` varchar(50) NOT NULL,
        //     `password` varchar(65) NOT NULL,
        //     PRIMARY KEY(`id`)
        //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

        // </h1>";

       // $save = $mysqli->query("INSERT INTO ")


    }else{

    }


    if(isset($_SESSION['username'])){
        echo"<h1>User already logged in</h1>";
    }else{
        echo"<h1>user not logged in </h1>";
    }


?>

