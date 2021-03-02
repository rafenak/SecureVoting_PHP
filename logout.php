<?php
session_start();

	if("VoterCard"){
	session_destroy();
	unset($_SESSION['VoterCard']);
	$msg="<center><h3><font color='#FF0000'>Successful logged out.</h3></center></font>";
	include'index.php';
	}
?>
