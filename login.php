<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    ><head>
        <title> User registeration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2> Log In</h2>
        </div>
        <form method="post" action="login.php">
              <!--display validation error here-->
        <?php include('error.php');?>
            
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="Email">
            </div>
            <div class="input-group">
                <label>password</label>
                <input type="password" name="password_1">
            </div>
            
            <div class="input-group">
               <button type="submit" class="btn" name="login"> Log In</button>
            </div>
            <p>
                not yet a member? <a href="register.php">sign up</a>
            </p>


            </form
    </body>
</html>