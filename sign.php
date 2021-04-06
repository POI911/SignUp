<?php


if (isset($_POST['submit'])){
    // just testing POST and GET
    $_fName = $_POST['firstName'];
    $_lName = $_POST['lastName'];
    $_userName = $_POST['userName'];
    $_userEmail = $_POST['userEmail'];
    $_password = $_POST['userPassword'];
    $_confirmPass = $_POST['confirmPass'];

    if($_password !== $_confirmPass){
        echo "Passwords don't match";
    }
    else
    echo "<h3>Welcome!</h3>";

}
else
    echo "<h1>ERROR!</h1>";



?>