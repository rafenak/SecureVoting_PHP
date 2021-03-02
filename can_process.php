<?php
include "connection.php";
include "voting_process.php";
$cand1	= $_POST['cand1'];
$VoterCard=$_SESSION['VoterCard'];

if(!$cand1){
echo "<center><h4><font color='#FF0000'>Please fill empty fields</h4></center></font>";
include 'can_vote.php';
exit();
}


	//Adding the escape character
	$cand1 = addslashes($cand1);	
	$cand1 = mysql_real_escape_string($cand1);
	$VoterCard = addslashes($VoterCard);	
	$VoterCard = mysql_real_escape_string($VoterCard);
		
$sql = 'SELECT * FROM voter WHERE VoterCard="'.$_SESSION['VoterCard'].'" AND status="voted"';
$result = mysql_query($sql);

			if (mysql_num_rows($result)==1){
	    //Login User already voted:
	   // echo $cand1;
        echo "<center><h4><font color='#FF0000'>You have already been voted, No need to vote again</h4></center></font>";
		include 'can_vote.php';
		exit();	
	        }
					
			else{
			
			 $sql = 'UPDATE candidate SET votecount = votecount + 1 WHERE ID = "'.$_POST['cand1'].'"';
         
            $sql2 = 'UPDATE voter SET status="voted" WHERE VoterCard="'.$_SESSION['VoterCard'].'"';
               

            $result = mysql_query($sql);
            $result2 = mysql_query($sql2);

	if(!$result && !$result2){
	die("Error on mysql query".mysql_error());
	}
	else{
	echo "<center><h4><font color='#FF0000'>Congratulation, you have made your vote.</h4></center></font>";
	include 'can_vote.php';
	exit();
	}	
	
}
?>
