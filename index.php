<?php include ('server.php');
if(empty($_SESSION['Email'])){
    header('location: login.php');
}


?>
<!DOCTYPE html>
<html>
    ><head>
        <title> User registeration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2> home page</h2>
        </div>

        <div class="content">
<?php if(isset($_SESSION['success'])): ?>
<div class="error success">
    <h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div>
    <?php endif ?>
    

    <?php if(isset($_SESSION["First_Name"])): ?>
        <p> welcome <stong>
            <?php echo $_SESSION['First_Name'];?>
            <?php echo $_SESSION['Last_Name'] ." your email:";?>
            <?php echo $_SESSION['Email'];?>
    
    
    </stong></p>
    <p><a href="index.php?logout='1'" style="color:red;">logout</a></p>
        <?php endif ?>
</div>
       
    </body>
</html>