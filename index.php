<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Salon management system</title>
        <?php include './pages/import.html'; ?> 
    </head>
    <body>
        <div id="login-body">
            <img src="images/girl-backless-wallpaper-3840x2400.jpg" class="loginpic"/>
        </div>
        
         <!--Login form-->
        <div class="login" >
            <img src="images/logo3.png" class="loginlogo"/>
            <center><form method="post" action="services/login.php" class="login-form">
                    <p class="logintopic">Login form</p>
                
                    <input type="text" name="username" placeholder="User Name"/> <br> <br> <br>
                
                <input type="password" name="password" style="color: " placeholder="Password"password/> <br/><br> <br>
                <input type="submit" name="submit" value="Login"/> <br> 
               <?php
        $msg = "";
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == "Invalid") {
               echo $msg = "<br/><p class='msg'>Invalid Login. Please try again!</p>";
            }
        }
        ?>
            </form></center>
        </div>
       
    </body>
</html>


