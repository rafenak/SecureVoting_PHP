 	   	<?php 
include"connection.php";

session_start();
if (isset($_REQUEST['GOBtn']))
{
$tsd=mysql_query("SELECT * FROM voter WHERE VoterCard='$_REQUEST[VoterCard]' AND password ='$_REQUEST[password]'",$con)or die("Problem with the query :".mysql_error());
$of=mysql_num_rows($tsd);
		if($of>0)
		{
			$_SESSION['VoterCard']=$_POST['VoterCard'];
		echo"<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=http:can_vote.php'>";

		}
	
		else
		{
		echo"Incorrect username or password!";
		include'voting.php';
		}
		mysql_close($con);
		}
?>