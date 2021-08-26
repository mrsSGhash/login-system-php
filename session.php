<?php
/*
    In this file, we will start the session and 
    check if a user is already logged in, if yes 
    then we will redirect the user to welcome.php file. 
*/

//Start the session
session_start();

//if the user is already logged in then redirect user to welcome page
if (isset ($_SESSION["userid"]) && $_SESSION["userid"] === true){
    header("location: welcome.php");
    exit;
}
?>