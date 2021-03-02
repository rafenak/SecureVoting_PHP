<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_ID is present or not
	if(!isset($_SESSION['SESS_Name']) || (trim($_SESSION['SESS_Name']) == ' ') ) {
		header("location: ../securevoting/can_vote.php");
		exit();
	}s
?>
