<?php

$database['host'] = 'localhost';
        $database['username'] = 'root';
        $database['userpass'] = '';
        $database['name'] = 'users';

        $GLOBALS['connection_link']  = mysqli_connect($database['host'], $database['username'],
        $database['userpass'], $database['name']) or die(mysqli_connect_error());

?>