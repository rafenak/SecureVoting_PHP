<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::e-voting::</title>
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<style type="text/css">
div#bo__dy div#bo__dy_conts {overflow:scroll;}
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
	<li class="topmenu"><a href="sel.php" style="width:135px;height:21px;line-height:21px;" id="active"><img src="__styles/menu/disk.png" alt=""/>Result</a></li>
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
     <div id="bo__dy_pub">
	   <div id="sliding__imgs">
	     <img src="files/body.png" />
	   </div>
	 </div>
	 <div id="bo__dy_conts">


	  <?php 
	 
	 include "connection.php";
		
echo "<p align = 'center'><font size = '40px'>Voters Detail</font></p>";
		echo "<table align='center' border='1'> 
		<tr>
<th>ID</th>
<th>Name</th>
<th>VoteCount</th>
</tr>";
		$result=mysql_query("SELECT * from candidate ") or die(mysql_error());
		if(mysql_num_rows($result) == 0) {
			echo "<script> alert('No Voters record');</script>";
			echo "<script> alert('Please input VoterCard in search field.');
		window.location = 'sel.php';</script>";
	
		}
		
		else {
			while($row = mysql_fetch_array($result))
			{
			echo "<tr>";
				echo "<td>".$row['ID']."<br />"."</td>";
				echo "<td>".$row['Name']."<br />"."</td>";
				echo "<td>".$row['votecount']."<br />"."</td>";
			echo "</tr>";


			}
			
		}
?>
</table>

	 </div>
	
  </div>
  <div id="FO__OTer" align="center"> 
 <p>&copy; <?php echo date('Y');?>.All rights reserved, e-voting</p>
        <p>Designed by <b>T21 TSEC</b></a>.</p>
  </div>
</div>
</body>
</html>