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
			<li id="soal" class="activelink"><a href="soal">Soal</a></li>
			<li id="score"><a href="score">Score</a></li>
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
				<h2><img src="images/last.gif" alt="ad"> Soal 5</h2>
				<p>
					asd
				</p>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>
</body>
</html>