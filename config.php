<?php
define ('DBSERVER', 'localhost');//Database server
define ('DBUSERNAME', 'root'); //Database username
define ('DBPASSWORD', 'usbw'); //Database password
define ('DBNAME', 'login-demo'); //Database name

/* connect to MySql database */
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

//check db connection
if ($db === false) {
    die("Error: connection error. " . mysqli_connect_error());
}
?>