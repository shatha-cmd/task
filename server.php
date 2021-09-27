<?php
session_start();
 $FirstName=""; 
 $LastName="";
 $Email="";

$errors=array();
$db=mysqli_connect('localhost','root','','registration');
//if register button is clicked
if(isset($_POST['register'])){
      $FirstName=mysqli_real_escape_string($db,$_POST['First_Name']);
    $LastName=mysqli_real_escape_string($db,$_POST['Last_Name']);
    $Email=mysqli_real_escape_string($db,$_POST['Email']);
    $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2=mysqli_real_escape_string($db,$_POST['password_2']);

    if(empty($FirstName)){
        array_push($errors,"first name is required");
    }
    if(empty($LastName)){
        array_push($errors,"Last name is required");
    }
    if(empty($Email)){
        array_push($errors,"Email is required");
    }
    if(empty($password_1)){
        array_push($errors,"password is required");
    }
    if($_POST['password_1']!= $_POST['password_2']){
        array_push($errors,"the two passwords dont match!");

    }//if there is no error save the user in data
    if(count($errors)==0){
        $password= md5($password_1);//encrypt befor storing it in database
        $sql="INSERT INTO users (FirstName,LastName,Email,password)
                         VALUES ('$FirstName','$LastName','$Email','$password')";
                          
        mysqli_query($db,$sql); 
        $_SESSION['First_Name']=$FirstName;  
        $_SESSION['Last_Name']=$LastName;    
        $_SESSION['Email']=$Email;
        $_SESSION['success']="you are now logged in";
        header('location: index.php');

    }

}

//log in user
if(isset($_POST['login'])){
    $Email=mysqli_real_escape_string($db,$_POST['Email']);
    $password=mysqli_real_escape_string($db,$_POST['password_1']);
    if(empty($Email)){
        array_push($errors,"Email is required");
    }
    if(empty($password)){
        array_push($errors,"password is required");
    }
    if(count($errors)==0){
        $password=md5($password);
        $query="SELECT *FROM users WHERE Email='$Email' AND password='$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['Email']=$Email;
            $_SESSION['success']="you are now logged in";
        
    

            header('location: index.php');
        }else{
            array_push($errors,"Wrong email/password combination");
        }
    }

}
//loggout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['First_name']);
    unset($_SESSION['last_name']);
    unset($_SESSION['Email']);
    header('location:login.php');


}


?>