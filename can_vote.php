<?php
if (isset($_POST['VoterCard']))
$_SESSION['VoterCard']=$_POST['VoterCard'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />


<style type="text/css">
#vote1{
background: #3498db;
  -webkit-border-radius: 25;
  -moz-border-radius: 25;
  border-radius: 25px;
  font-family: Arial;
  color: #ffffff;
  font-size: 13px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;

}

div#bo__dy div#bo__dy_conts {overflow:visible;}


    ul.rig {
    	list-style: none;
    	font-size: 0px;
    	margin-left: -2.5%; /* should match li left margin */
    }
    ul.rig li {
    	display: inline-block;
    	padding: 10px;
    	margin: 0 0 2.5% 2.5%;
    	background: #fff;
    	font-size: 16px;
    	font-size: 1rem;
    	vertical-align: top;
    	box-shadow: 0 0 5px #ddd;
    	box-sizing: border-box;
    	-moz-box-sizing: border-box;
    	-webkit-box-sizing: border-box;
    }
    ul.rig li img {
    	max-width: 100%;
    	height: auto;
    	margin: 0 0 10px;
    }
    ul.rig li h3 {
    	margin: 0 0 5px;
    }
    ul.rig li p {
    	font-size: .9em;
    	line-height: 1.5em;
    	color: #999;
    }
    /* class for 2 columns */
    ul.rig.columns-2 li {
    	width: 47.5%; /* this value + 2.5 should = 50% */
    }
    /* class for 3 columns */
    ul.rig.columns-3 li {
    	width: 30.83%; /* this value + 2.5 should = 33% */
    }
    /* class for 4 columns */
    ul.rig.columns-4 li {
    	width: 22.5%; /* this value + 2.5 should = 25% */
    }
     
    @media (max-width: 480px) {
    	ul.grid-nav li {
    		display: block;
    		margin: 0 0 5px;
    	}
    	ul.grid-nav li a {
    		display: block;
    	}
    	ul.rig {
    		margin-left: 0;
    	}
    	ul.rig li {
    		width: 100% !important; /* over-ride all li styles */
    		margin: 0 0 20px;
    	}
    }
</style>

<script src="gen_validatorv4.js" type="text/javascript"></script>
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
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
	<li class="topmenu"><a href="logout.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/door_in.png" alt=""/>Logout</a></li>
	<li class="toplast"><a href="#" style="width:135px;height:21px;line-height:21px;"><span><img src="__styles/menu/help.png" alt=""/>Electrol council</span></a>
	<ul>
		<li class="subfirst"><a href="electHelp.php">Help</a></li>
		<li><a href="electContact.php">Contact</a></li>
	</ul></li>
</ul>
</div>
  
  </div>
  <div id="bo__dy">
	 <div id="bo__dy_conts">
<br/><h3>Make a vote.</h3>
  <div id="login">
<table width="100%">

<form action="can_process.php" name="myform" id="myform" method="post">
	    <ul class="rig columns-4">
    	<li>
    		<img src="files/BJP.jpg" />
    		<input type="radio" name="cand1" value="1" size="10" />BJP<br/><br/>
    	</li>
    	<li>
    		<img src="files/INC.jpg" />
    		<input type="radio" name="cand1" value="2" size="10" />INC<br/><br/>
    	</li>
    	<li>
    		<img src="files/SHI.jpg" />
    		<input type="radio" name="cand1" value="3" size="10" />SHI<br/><br/>
    	</li>
    	<li>
    		<img src="files/NCP.jpg" />
    		<input type="radio" name="cand1" value="4" size="10" />NCP<br/><br/>
    	</li>
    </ul>

    <input type="submit" value="MAKE A VOTE" name="submit" id="vote1" /></td>

    <script type="text/javascript">
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("cand1","req","Please select party."); 
</script>

    
    </form>
</table>
</div>

</div>  
 </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by <b>T21 TSEC</b></a>.</p>
  </div>
</div>
</body>
</html>