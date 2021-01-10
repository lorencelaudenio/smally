<?php
if(!isset($_SESSION['s_username']) || empty($_SESSION['s_password'])){
	header("location: login.php");
}
?>