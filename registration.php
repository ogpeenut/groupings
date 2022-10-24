<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      
    <div class="twoContainer">
    <img src="gs.jpg">
    <div class="form">
        <form method="post" action="registrationprocess.php" autocomplete="off">

                <b>REGISTRATION</b>
            <input type="text" name="firstName" id="firstName" placeholder="Enter First Name" requried autofocus><br><br>

            <input type="text" name="lastName" id="lastName" placeholder="Enter Last Name" requried autofocus><br><br>
            
            <input type="text" name="address" id="address" placeholder="Enter Address" requred value=""><br><br>
           
            <input type="text" name="contactNum" id="contactNum" placeholder="Enter Contact No." requred value=""><br><br>
           
            <input type="text" name="username" id="username" placeholder="Enter Username" requred value=""><br><br>
           
            <input type="password" name="password" id="password" placeholder="Enter Password" requred value=""><br><br>

            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" requred value=""><br><br>

            <button type="submit" name="submit"><p style="color:white">Register</p></button>
            
            <button type= "login-button" onclick="location.href= 'login.php'"><p style="color:white"> Login </p></button>
            <button class= "home-button"  onclick="location.href= 'welcome.php'"><p style="color:white"> Home </p></button>
        
        </form> </h3> </div>
        
    </body>
</html>