<?php


function checkUser(){
    $GLOBALS['connection_link'];
    $query = "SELECT * FROM users_info WHERE user_name='{$GLOBALS['userName']}'";
    if ($result = mysqli_query($GLOBALS['connection_link'], $query)){
        if(mysqli_num_rows($result) == '1'){
            return true;
        }
        else return false;
    }

    }

    function signUp(){
        $query = "INSERT INTO users_info (first_name, last_name, user_email, user_name, user_pass) VALUES
    ('{$GLOBALS['fName']}', '{$GLOBALS['lName']}', '{$GLOBALS['useremail']}', '{$GLOBALS['userName']}', '{$GLOBALS['password']}')";

        if (mysqli_query($GLOBALS['connection_link'],$query) === true)
        return true;
        else
        return false;
    }


if (isset($_POST['submit'])){

    // just testing POST and GET
  $GLOBALS['fName'] =  $_POST['firstName'];
  $GLOBALS['lName'] = $_POST['lastName'];
  $GLOBALS['userName'] = $_POST['userName'];
  $GLOBALS['useremail'] = $_POST['userEmail'];
  $GLOBALS['password'] = $_POST['userPassword'];
  $GLOBALS['confrimPass'] = $_POST['confirmPass'];



    if($GLOBALS['password'] !== $GLOBALS['confrimPass']){
        echo "Passwords don't match try again!";
    }
    // stats here!
    else
        include 'DBconnection.php';

        if(checkUser() === false){
            if(signUp() === true){
                echo "Account Registered";
				echo "<a href='login.html'>Sign in</a>";
				
            }
        }
        else
            echo "ERROR! Account already exists";
			echo "<a href='login.html'>Sign in</a>";
}
else
    echo "<h1>Access Denied!</h1>";


    include 'DBconnectionClose.php';

?>
