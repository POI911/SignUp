<?php

function login(){
    $GLOBALS['connection_link'];
    $query = "SELECT * FROM users_info WHERE user_name = '{$GLOBALS['username_login']}' AND  user_pass = '{$GLOBALS['password_login']}' ";
    if($result = mysqli_query($GLOBALS['connection_link'], $query)){
        if(mysqli_num_rows($result) == '1'){
               return true;
        }
        else return false;
    }
    else echo "connection bad";
}
if(isset($_POST["submit"])){
    $GLOBALS['username_login'] = $_POST['username'];
    $GLOBALS['password_login'] = $_POST['userpassword'];

    include "DBconnection.php";
    $GLOBALS['connection_link'];
    if(login() === true){
        echo "Welcome Back!";

    }
    else{
        echo "Username and/or Password is wrong!";
        echo "<br>";
        echo "<a  href='login.html'>Try Again!</a>";
    }

    include "DBconnectionClose.php";
}









?>