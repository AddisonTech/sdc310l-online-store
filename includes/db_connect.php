<?php
// includes/db_connect.php
// Database connection file for the SDC310L Online Store.
// Include this file at the top of any page that needs database access.

$hostname = "localhost";
$username = "ecpi_user";
$password = "Password1";
$dbname   = "sdc310l_store";

// Open the connection and store it in $conn
$conn = mysqli_connect($hostname, $username, $password, $dbname);
