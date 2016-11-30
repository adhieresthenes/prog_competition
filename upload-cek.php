<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Programming Contest</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ddaccordion.js"></script>
	<script type="text/javascript">
		ddaccordion.init({
			headerclass: "submenuheader", //Shared CSS class name of headers group
			contentclass: "submenu", //Shared CSS class name of contents group
			revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
			mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
			collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
			defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
			onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
			animatedefault: false, //Should contents open by default be animated into view?
			persiststate: true, //persist state of opened contents within browser session?
			toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
			togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
			animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
			oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
				//do nothing
			},
			onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
			//do nothing
			}
		})
	</script>
	<script type="text/javascript" src="js/jconfirmaction.jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.ask').jConfirmAction();
		});
	</script>
	<script language="javascript" type="text/javascript" src="js/niceforms.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="css/niceforms-default.css" />
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
			<li id="score"><a href="score">Score</a></li>
			<li id="upload" class="activelink"><a href="upload">Upload</a></li>
		</ul>
		<div id="login">
			<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
			<b id="logout">| <a href="logout">Log Out</a></b>
		</div>
	</div>
	<div id="container">
		<div id="content">
			<div id="box">
				<?php
				// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
				// of $_FILES.

				$uploaddir = 'C:\\';
				$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

				//echo '<pre>';
				if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
				    echo "<center><h1>File is valid, and was successfully uploaded.\n</h1></center>";
				} else {
				    echo "<center><h1>File gagal di upload!\n</h1><center>";
				}

				//echo 'Here is some more debugging info:';
				//print_r($_FILES);

				//print "</pre>";

				?>
								
			</div>
		</div>
	</div>
	<?php include('footer.php');?>
</body>
</html>

