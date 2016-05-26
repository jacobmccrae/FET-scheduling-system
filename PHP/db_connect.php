<?php
define("HOST", "localhost"); // The host you want to connect to.
define("USER", "mctom03_2261"); // The database username.
define("PASSWORD", "*******"); // The database password. 
define("DATABASE", "mctom03_2261db"); // The database name.

$dbname = "mctom03_2261db";
$users = "users"; 
 
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
// If you are connecting via TCP/IP rather than a UNIX socket remember to add the port number as a parameter.
