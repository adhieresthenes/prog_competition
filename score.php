<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Programming Contest</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include('session.php');?>
	<div id="banner">
		<h2>	
			<a href="#"><img src="images/logo.png" alt="" title="" border="0" width="145px" height="70px"/></a> 
		</h2>
		<h1>	
			&nbsp- Programming Contest
		</h1>
	</div>
	<div id="menu">
		<ul id="nav">
			<li id="home"><a href="home">Home</a></li>
			<li id="soal"><a href="soal">Soal</a></li>
			<li id="score" class="activelink"><a href="score">Score</a></li>
			<li id="upload"><a href="upload">Upload</a></li>
		</ul>
		<div id="login">
			<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
			<b id="logout">| <a href="logout">Log Out</a></b>
		</div>
	</div>
	<div id="container">
		<div id="content">
			<div id="box">
				<h2><img src="images/last.gif" alt="ad"> Score</h2>
				<table width=100%>
					<tr align="center">
						<td>Soal 1</td>
						<td>Soal 2</td>
						<td>Soal 3</td>
						<td>Soal 4</td>
						<td>Soal 5</td>
						<td>Soal 6</td>
						<td>Soal 7</td>
						<td>Soal 8</td>
						<td>Soal 9</td>
						<td>Soal 10</td>
					</tr>
					<tr align="center">
						<td action="tb_score"style="background-color:green; color:white">-</td>
						<td action="tb_score"style="background-color:red; color:white">-</td>
						<td action="tb_score">-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>
</body>
</html>