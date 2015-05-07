<!--Roy Perdue
    Assignment_5
    Game_Page -->
<?php		
          $op = "nothing";
          
if(isset($_POST["operation"]))
{
     $op = $_POST["operation"];
     if(isset($_POST["money"]))
	{
		if($op == "add")
		{         
			$money = $_POST["money"];
			require_once 'AddMoney.php';
		     $cash = new AddMoney($money); 
		}
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
		 var image1 = new Array();   
     	 image1[0] = "club.png"; 
     	 image1[1] = "heart.png"; 
     	 image1[2] = "spade.png";
		 image1[3] = "diamond.png";
		 image1[4] = "star.png";
		 var image2 = new Array();   
     	 image2[0] = "club.png"; 
     	 image2[1] = "heart.png"; 
     	 image2[2] = "spade.png";
		 image2[3] = "diamond.png";
		 image2[4] = "star.png";
		 var image3 = new Array();   
     	 image3[0] = "club.png"; 
     	 image3[1] = "heart.png"; 
     	 image3[2] = "spade.png";
		 image3[3] = "diamond.png";
		 image3[4] = "star.png";
		 var image4 = new Array();   
     	 image4[0] = "club.png"; 
     	 image4[1] = "heart.png"; 
     	 image4[2] = "spade.png";
		 image4[3] = "diamond.png";
		 image4[4] = "star.png";
		 var image5 = new Array();   
     	 image5[0] = "club.png"; 
     	 image5[1] = "heart.png"; 
     	 image5[2] = "spade.png";
		 image5[3] = "diamond.png";
		 image5[4] = "star.png";
		 var randNum1 = 0;
		 var randNum2 = 0;
		 var randNum3 = 0;
		 var randNum4 = 0;
		 var randNum5 = 0;
		 var count = 0;
		
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
			var r = Math.floor(Math.random()*200);
		 	var g = Math.floor(Math.random()*200);
		 	var b = Math.floor(Math.random()*200);
		 	document.getElementById("gamesTable").style.background = 'rgb(' + r + ',' + g + ',' + b + ')';
		 	
		 }, 800);
		 var swap1 = window.setInterval(function swapImage1()
		 {
			 var xmlhttp1 = new XMLHttpRequest();
  			 xmlhttp1.open("GET","Rand1.php",true);
			 xmlhttp1.send();
  			 xmlhttp1.onreadystatechange = function()
  			 {
 				 if(xmlhttp1.readyState == 4 && xmlhttp1.status == 200)
   				 {
   					 var str1 = xmlhttp1.responseText;
   					 randNum1 = parseInt(str1);
    				 }
		      }
			 var img= document.getElementById("slide1"); 
			 img.src= image1[randNum1];
		 }, 500);
		 var swap2 = window.setInterval(function swapImage2()
		 { 
			 var xmlhttp2 = new XMLHttpRequest();
  			 xmlhttp2.open("GET","Rand2.php",true);
			 xmlhttp2.send();
			 xmlhttp2.onreadystatechange = function()
  			 {
 				 if(xmlhttp2.readyState == 4 && xmlhttp2.status == 200)
   				 {
   					 var str2 = xmlhttp2.responseText;
   					 randNum2 = parseInt(str2);
    				 }
		      }
			 var img= document.getElementById("slide2"); 
			 img.src= image2[randNum2];
		}, 500);
		var swap3 = window.setInterval(function swapImage3()
	     { 
			 var xmlhttp3 = new XMLHttpRequest();
  			 xmlhttp3.open("GET","Rand3.php",true);
			 xmlhttp3.send();
			 xmlhttp3.onreadystatechange = function()
  			 {
 				 if(xmlhttp3.readyState == 4 && xmlhttp3.status == 200)
   				 {
   					 var str3 = xmlhttp3.responseText;
   					 randNum3 = parseInt(str3);
    				 }
		      }
			 var img= document.getElementById("slide3"); 
			 img.src= image3[randNum3];
		}, 500);
	     var swap4 = window.setInterval(function swapImage4()
		{	 
			 var xmlhttp4 = new XMLHttpRequest();
  			 xmlhttp4.open("GET","Rand4.php",true);
			 xmlhttp4.send();
			 xmlhttp4.onreadystatechange = function()
  			 {
 				 if(xmlhttp4.readyState == 4 && xmlhttp4.status == 200)
   				 {
   					 var str4 = xmlhttp4.responseText;
   					 randNum4 = parseInt(str4);
    				 }
		      }
			 var img= document.getElementById("slide4"); 
			 img.src= image4[randNum4];
		 }, 500);
		 var swap5 = window.setInterval(function swapImage5()
		 {	 
			 var xmlhttp5 = new XMLHttpRequest();
  			 xmlhttp5.open("GET","Rand5.php",true);
			 xmlhttp5.send();
			 xmlhttp5.onreadystatechange = function()
  			 {
 				 if(xmlhttp5.readyState == 4 && xmlhttp5.status == 200)
   				 {
   					 var str5 = xmlhttp5.responseText;
   					 randNum5 = parseInt(str5);
    				 }
		      }
			 var img= document.getElementById("slide5"); 
			 img.src= image5[randNum5];
			
		}, 500);
		function stopOne()
		{
			clearInterval(swap1);
			count++;
			if(count == 5)
			{
				var xmlhttp5 = new XMLHttpRequest();
  			 	xmlhttp5.open("GET","Trigger1.php",true);
			 	xmlhttp5.send();
			 	count = 0;
			}
			var audio = document.getElementsByTagName("audio")[0];
			audio.play();
		}
	     function stopTwo()
		{
			clearInterval(swap2);
			count++;
			if(count == 5)
			{
				var xmlhttp5 = new XMLHttpRequest();
  			 	xmlhttp5.open("GET","Trigger1.php",true);
			 	xmlhttp5.send();
			 	count = 0;
			}
			var audio = document.getElementsByTagName("audio")[0];
			audio.play();
		}
		function stopThree()
		{
			clearInterval(swap3);
			count++;
			if(count == 5)
			{
				var xmlhttp5 = new XMLHttpRequest();
  			 	xmlhttp5.open("GET","Trigger1.php",true);
			 	xmlhttp5.send();
			 	count = 0;
			}
			var audio = document.getElementsByTagName("audio")[0];
			audio.play();
		}
		function stopFour()
		{
			clearInterval(swap4);
			count++;
			if(count == 5)
			{
				var xmlhttp5 = new XMLHttpRequest();
  			 	xmlhttp5.open("GET","Trigger1.php",true);
			 	xmlhttp5.send();
			 	count = 0;
			}
			var audio = document.getElementsByTagName("audio")[0];
			audio.play();
		}
		function stopFive()
		{
			clearInterval(swap5);
			count++;
			if(count == 5)
			{
				var xmlhttp5 = new XMLHttpRequest();
  			 	xmlhttp5.open("GET","Trigger1.php",true);
			 	xmlhttp5.send();
			 	count = 0;
			}
			var audio = document.getElementsByTagName("audio")[0];
			audio.play();
		}	
		function reloadPage()
		{
  		 	window.location.reload();
		}
</script>
		  <audio>
			<source src="chaching.wav"></source>
		  </audio>
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
								<li><button id="rollOneButton" onclick="stopOne()"></button></li>
								<li><button id="rollTwoButton" onclick="stopTwo()"></button></li>
								<li><button id="rollThreeButton" onclick="stopThree()"></button></li>
								<li><button id="rollFourButton" onclick="stopFour()"></button></li>
								<li><button id="rollFiveButton" onclick="stopFive()"></button></li>
						 		</ul>
								</div>
								<div class="bulletin"> 
								  <div class="object">
									<div class="frame">
										<table id="gamesTable">
											<tr><th>Round #:</th><th>Username:</th>
											<th>Wheel 1:</th><th>Wheel 2:</th>
											<th>Wheel 3:</th><th>Wheel 4:</th>
											<th>Wheel 5:</th><th>$Bet:</th>
											<th>$Won or lost:</th><th>$Remaining:</th>
											</tr>
											<? 
											require_once 'DB_Connect.php';
											$connection = new DB_Connect();
											$select = "SELECT GAME_ID, GAME_USERNAME, GAME_WHEEL1, GAME_WHEEL2, GAME_WHEEL3, GAME_WHEEL4, GAME_WHEEL5, 
											GAME_AMOUNTBET, GAME_AMOUNTWON, GAME_AMOUNTLOST, GAME_AMOUNTREMAINING FROM GAME";
											$result = mysql_query($select); 
											if($result == FALSE)
											{
												echo '<script type="text/javascript">alert("LoadGame! ERROR");</script>';
											}
											$rows = mysql_num_rows($result); 
										     for($i = 0; $i < $rows; $i++)
											{
												$row = mysql_fetch_row($result);
											?>             
												<tr>
													<td><?= $row[0]; ?></td>
													<td><?= $row[1]; ?></td>
													<td><?= $row[2]; ?></td>
													<td><?= $row[3]; ?></td>
													<td><?= $row[4]; ?></td>                                                                                        
													<td><?= $row[5]; ?></td>
													<td><?= $row[6]; ?></td>
													<td><?= $row[7]; ?></td>
													<td><?= $row[8]; ?></td>
													<td><?= $row[9]; ?></td>
												</tr>
											<?   
											 }
											?>
										</table>
								       </div>
							        </div> 
							 </div> 
					<div id="footer">
				     <div class="innerFooter">
				     <h4>Play Again</h4>
				 	<a><button id="reload" onclick="reloadPage()";></button></a>
					</div>
					<div class="innerFooter">
					<h4>Add Money</h4>
					<form action="Game.php" method="post">
						<table>
						<tr><td class="formCell"></td><td><input type="text" name="money"/></td></tr>
						<tr><td colspan="2"><input type="submit" value="Add"/></td></tr>
						</table>
						<input type="hidden" name="operation" value="add"/><br/>
					</form>
				 </div>
				 <div class="innerFooter">
				 	
				 </div>
				</div>
			</div>
			</div>
		</body>
</html>
