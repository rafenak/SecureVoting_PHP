<?php

        if (isset($_SESSION['VoterCard'])) {

            $_SESSION['VoterCard'] = $_POST['VoterCard'];
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<style type="text/css">
div#bo__dy div#bo__dy_conts {overflow: scroll;}
</style>
</head>

<body>
 <div id="whole">
	 
  <div id="hEa__d">
     <div id="lo__go">
	    <img src="__styles/logo1.png" style="position: relative;" />
		<marquee><b><i>online Voting System</b></i></marquee>
	 </div>
	 <div id="ba__nner">
	    <img style=" position:relative; top:70px; left:200px;" src="__styles/banner1.jpg"/>	
	 </div>

  </div>
  <div id="me__nu">
  <div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/house.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="login.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Login</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electrol council</span></a>
	<ul>
		<li class="subfirst"><a href="electHelp.php">Help</a></li>
		<li><a href="electContact.php">Contact</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
  <div id="bo__dy">
     <div id="bo__dy_pub">
	 <form method="post" enctype="multipart/form-data" action="search.php">
				<input type="text" name="search" class="desing" id="search" value="">
				<input type="submit" name="searchBtn" id="searchBtn" value="">
	 </form>
	   <div id="sliding__imgs">
	     <img src="files/body.png" />
	   </div>
	 </div>
	 <div id="bo__dy_conts">

	
  	<?php 
  	/*
include"connection.php";
if (isset($_REQUEST['GOBtn']))
{
$tsd=mysql_query("SELECT * FROM voter WHERE VoterCard='$_REQUEST[VoterCard]' AND password ='$_REQUEST[password]'",$con)or die("Problem with the query :".mysql_error());
$of=mysql_num_rows($tsd);
		if($of>0)
		{
			$member = mysql_fetch_assoc($of);
			$_SESSION['SESS_NAME']=$member['VoterCard'];
		echo"<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=http:can_vote.php'>";
		}
		else
		{
		echo"Incorrect username or password!";
		}
		mysql_close($con);
		}
		*/
?>

	 <fieldset style="width:400px; margin:auto;">
	 <legend> <h3>Login here to vote:</h3></legend>
	   <form id="vote" method="post" action="voting_process.php" >
		  <span class="legend">Voter card Number:<span style="color:#FF0000;">*</span></span><input type="text" name="VoterCard" id="VoterCard" class="desing"  required placeholder="enter card number"><br /><br />
		  <span class="legend">Password:<span style="color:#FF0000;">*</span></span><input type="password" name="password" id="password" class="desing"  required placeholder="enter password"><br /><br />
		  <input type="submit" name="GOBtn" id="GOBtn" value="">
	   </form>
	 </fieldset>
	 <p class="page2">
	 
	 Traditional voting systems have been developed to ensure that the principles required for democratic elections and referendums are met, namely the guarantee of the freedom to vote, the secrecy of the vote, the non modification of the expressed intention of the vote and lack of intimidation during the vote operation. It is essential that these principles are not undermined by the introduction of new voting methods and, accordingly, e-voting systems must be so designed and operated as to ensure the reliability and security of the voting process. In sum: E-voting has to be as free, secret, reliable and secure as voting systems that do not involve the use of electronic means.An e-voting system therefore should consider the following minimum requirements:
<ol>
   <li>To ensure that only persons with the right to vote are able to cast a vote.</li>
   <li>To ensure that every vote cast is counted and that each vote is counted only once.</li>
   <li>To maintain the voter’s right to form and to express his or her opinion in a free manner, without any coercion or undue influence.</li>
   <li>To protect the secrecy of the vote at all stages of the voting process.</li>
   <li>To guarantee accessibility to as many voters as possible, especially with regard to persons with disabilities.</li>
   <li>To increase voter confidence by maximizing the transparency of information on the functioning of each system.</li>
</ol>  
	 </p>
	 </div>
	
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by <b>T21 TSEC</b></a>.</p>
		
  </div>
</div>
</body>
</html>
