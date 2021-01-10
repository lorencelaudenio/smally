<?php
ob_start();
session_start();
require_once("./config.php");
error_reporting (E_ALL ^ E_NOTICE); //para no undefined error
// Create connection
$conn = new mysqli("localhost","root","1234","lorenceblog");
//$conn = new mysqli("sql107.epizy.com","epiz_27647333","8nOcCnEgxaupq2","epiz_27647333_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>