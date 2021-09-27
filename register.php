<?php include ("server.php");?>
<!DOCTYPE html>
<html>
    ><head>
        <title> User registeration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2> sign up now</h2>
        </div>
        <form method="post" action="register.php">
        <!--display validation error here-->
        <?php include('error.php');?>

            <div class="input-group">
                <label>First Name</label>
                <input type="text" name="First_Name" value="<?php echo $FirstName ;?>">
            </div>

            <div class="input-group">
                <label>Last Name</label>
                <input type="text" name="Last_Name" value="<?php echo $LastName ;?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="Email" value="<?php echo $Email ;?>">
            </div>
            <div class="input-group">
                <label>password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>confirm password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
               <button type="submit" class="btn" name="register"> Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">sign in</a>
            </p>


            </form
    </body>
</html>