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
	<li class="topmenu"><a href="voting.php" style="width:136px;height:21px;line-height:21px;"><img src="__styles/menu/tick.png" alt=""/>Voting</a></li>
	<li class="topmenu"><a href="register.php" style="width:135px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/disk.png" alt=""/>Register</a></li>
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
	   <div id="sliding__imgs">
	     <img src="files/body.png" />
	   </div>
	 </div>
	 <div id="bo__dy_conts">
	  <?php 
	  session_start();
if(isset($_POST['Register']))
{
include"connection.php";
$one=mysql_query("
INSERT INTO `voting`.`voter` (`ID`, `VoterCard`, `Number_of_ID`, `Names`, `FatherNames`, `MotherNames`, `DoB`, `State`,`District`, `sec_name`, `VotingCenter`, `pob`, `password`) VALUES (NULL, '$_REQUEST[VoterCard]', '$_REQUEST[Number_of_ID]', '$_REQUEST[Names]', '$_REQUEST[FatherNames]', '$_REQUEST[MotherNames]', '$_REQUEST[DoB]', '$_REQUEST[State]','$_REQUEST[District]', '$_REQUEST[sec_name]', '$_REQUEST[VotingCenter]', '$_REQUEST[pob]', '$_REQUEST[password]');",$con)or die(mysql_error());
if($one)
{
echo"<center><u><h4><font color='#003300'><H3>Congratulation,</h3></font></h4></u></center>";
echo"<center><u><h4><font color='#003300'><H3>Your Account Has Been Successfully Created to Vote!,</h3></font></h4></u></center>";
echo"<p><font color='#003300'><p>Now you are an Active Member Of E-VOTING SYSTEM; which give you a power to Vote</p></font></p>";

}
mysql_close($con);
}
?>
	 <fieldset><legend><h4>Register here </h4></legend>
<form method="post" enctype="multipart/form-data"><table width="500" height="100" background bgcolor="#FFFFFF"align="center"  bgcolor="#CCCCCC">
<tr><td><span class="legend">VoterCard :<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="VoterCard" class="desing" required /></td></tr><tr>
<td><span class="legend">IDNumber <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="Number_of_ID" class="desing" required/></td></tr><tr>
<td><span class="legend">Names <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="Names" class="desing" required/></td></tr><tr><td><span class="legend">FatherNames<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="FatherNames"  class="desing" required /></td></tr>

<td><span class="legend">MotherNames<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="MotherNames" class="desing" required/></td></tr><tr>
<td><span class="legend">DoB<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="DoB" class="desing" required/></td></tr><tr>
<td><span class="legend">State<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="State" class="desing" required/></td></tr><tr>

	<td><span class="legend">District <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="District" required  class="desing" required /></td>
<tr><td><span class="legend">Sector<span style="color:#FF0000;">*</span></span></td><td><input type="text"   name="sec_name" required class="desing" required /></td></tr>
		
<td><span class="legend">VotingCenter <span style="color:#FF0000;">*</span></span></td><td><input type="text" name="VotingCenter"  class="desing" required /></td>
<tr><td><span class="legend">PoB<span style="color:#FF0000;">*</span></span></td><td><input type="text" name="pob"  class="desing" required /></td></tr>
<tr><td><span class="legend">Voting Pin<span style="color:#FF0000;">*</span></span></td><td><input type="password" name="password"  class="desing" required /></td></tr>
</b></tr><tr>
<td><input type="submit" value="" name="Register" id="SaveBTN"/></td>
<td><input type="reset" value="" name="" id="canselBTN"/></td></tr>
</tr></table></form>

	 </div>
	
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by <b>T21 TSEC</b></a>.</p>
  </div>
</div>
</body>
</html>