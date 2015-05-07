<!--Roy Perdue
    Assignment_5
    SignIn_Page -->
<?php
require('../vendor/autoload.php');
$op = "nothing";

if (isset($_POST["operation"]))
{
	$op = $_POST["operation"];
	if($op == "create")
	{         
		require_once 'CreateAcct.php';
		$account = new CreateAcct();
	}
	if($op == "login")
	{
		if(isset($_POST["username"]) && isset($_POST["password"]))
		{
			session_start();
			
		$username = $_POST["username"];
			$password = $_POST["password"];
			
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		}
		require_once 'SignIn.php';
		$start = new SignIn($_SESSION['username'], $_SESSION['password']);
	}
	if($op == "delete")
	{
		if(isset($_POST["email"]) && isset($_POST["password"]))
		{
		$email = $_POST["email"];
			$password = $_POST["password"];
		}
		require_once 'DeleteAcct.php'; 
		$delete = new Delete($email, $password); 
	}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Blast of Cash!</title>
<link rel="stylesheet" href="style_sheet_game.css">

</head>
<body>
<script type="text/javascript">

window.setInterval(function blink()
{
	var r = Math.floor(Math.random()*200);
 	var g = Math.floor(Math.random()*200);
 	var b = Math.floor(Math.random()*200);
	document.getElementById("rollOneButton").style.background = 'rgb(' + r + ',' + g + ',' + b + ')';
	var r = Math.floor(Math.random()*200);
 	var g = Math.floor(Math.random()*200);
 	var b = Math.floor(Math.random()*200);
	document.getElementById("rollTwoButton").style.background = 'rgb(' + r + ',' + g + ',' + b + ')';
	var r = Math.floor(Math.random()*200);
 	var g = Math.floor(Math.random()*200);
 	var b = Math.floor(Math.random()*200);
	document.getElementById("rollThreeButton").style.background = 'rgb(' + r + ',' + g + ',' + b + ')';
	var r = Math.floor(Math.random()*200);
 	var g = Math.floor(Math.random()*200);
 	var b = Math.floor(Math.random()*200);
	document.getElementById("rollFourButton").style.background = 'rgb(' + r + ',' + g + ',' + b + ')';
	var r = Math.floor(Math.random()*200);
 	var g = Math.floor(Math.random()*200);
 	var b = Math.floor(Math.random()*200);
	document.getElementById("rollFiveButton").style.background = 'rgb(' + r + ',' + g + ',' + b + ')';
	
 }, 500);

</script>
  <div id="container">
  <div id="header"><h1>$Blast of Cash$</h1><div id="innerHeader"><h2>Online slot machine!</h2>
</div></div>
<div id="leftContainer"></div>
<div id="mainContent">
 <div class="imageborder1"><img src="cash1.png" alt=""></div>
 <div class="imageborder2"><img src="cash2.png" alt=""></div>
 <div class="imageborder3"><img src="cash3.png" alt=""></div>
	 <div id="spinContainer">
	<div class="flashContainer">
	<table> 
	<tr> 
	<td> 
	<img name="slide" id="slide1" alt ="" src="club.png"/> 
	</td> 
	</tr> 
	</table>
	</div>
	<div class="flashContainer">
	<table> 
	<tr> 
	<td> 
	<img name="slide" id="slide2" alt ="" src="club.png"/> 
	</td> 
	</tr> 
	</table>
	</div>
	<div class="flashContainer">
	<table> 
	<tr> 
	<td> 
	<img name="slide" id="slide3" alt ="" src="club.png"/> 
	</td> 
	</tr> 
	</table>
	</div>
	<div class="flashContainer">
	<table> 
	<tr> 
	<td> 
	<img name="slide" id="slide4" alt ="" src="club.png"/> 
	</td> 
	</tr> 
	</table>
	</div>
	<div class="flashContainer">
	<table> 
	<tr> 
	<td> 
	<img name="slide" id="slide5" alt ="" src="club.png"/> 
	</td> 
	</tr> 
	</table>
	</div>
 
</div>
<div id="buttonContainer">
		<ul class="btn">
		<li><button id="rollOneButton" onclick=""></button></li>
		<li><button id="rollTwoButton" onclick=""></button></li>
		<li><button id="rollThreeButton" onclick=""></button></li>
		<li><button id="rollFourButton" onclick=""></button></li>
		<li><button id="rollFiveButton" onclick=""></button></li>
 		</ul>
		</div>
		<div class="bulletin"> 
		  <div class="object">
			<div class="frame">
			  <div class="canvas">
			 
			
		       </div>
	        </div> 
		</div>
	 </div> 
<div id="footer">
 <div class="innerFooter">
	<h4>Create an account.</h4>
<form action="index.php" method="post">
	<table>
	<tr><td class="formCell">First:</td><td><input type="text" name="first"/></td></tr>
	<tr><td class="formCell">Last:</td><td><input type="text" name="last"/></td></tr>
	<tr><td class="formCell">Email:</td><td><input type="text" name="email"/></td></tr>
	<tr><td class="formCell">Username:</td><td><input type="text" name="username"/></td></tr>
	<tr><td class="formCell">Password:</td><td><input type="text" name="password"/></td></tr>
	<tr><td class="formCell">Initial Deposit:</td><td><input type="text" name="initialdollars"/></td></tr>
	<tr><td colspan="3"><input type="submit" value="Create"/></td></tr>
	</table>
	<input type="hidden" name="operation" value="create"/><br/>
</form>
</div>
 <div class="innerFooter">
 	<h4>Sign in.</h4>
	<form action="index.php" method="post">
		<table>
		<tr><td class="formCell">Username:</td><td><input type="text" name="username"/></td></tr>
		<tr><td class="formCell">Password:</td><td><input type="password" name="password"/></td></tr>
		<tr><td colspan="3"><input type="submit" value="Login"/></td></tr>
		</table>
		<input type="hidden" name="operation" value="login"/><br/>
	</form>
	</div>
	<div class="innerFooter">
	<h4>Delete Account.</h4>
	<form action="index.php" method="post">
		<table>
		<tr><td class="formCell">Email:</td><td><input type="text" name="email"/></td></tr>
		<tr><td class="formCell">Password:</td><td><input type="text" name="password"/></td></tr>
		<tr><td colspan="3"><input type="submit" value="Delete"/></td></tr>
		</table>
		<input type="hidden" name="operation" value="delete"/><br/>
	</form>
</div>
</div>
</div>
</div>
</body>
</html>
