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
				<h2><img src="images/last.gif" alt="ad"> Upload</h2>
				<form enctype="multipart/form-data" action="upload-cek" method="post" class="niceform">
					<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
					<dl>
                        <dt><label for="soal">Pilih Soal :</label></dt>
                        <dd>
                            <select size="1" name="soal" id="">
                                <option value="1">soal 1</option>
                                <option value="2">soal 2</option>
								<option value="3">soal 3</option>
								<option value="4">soal 4</option>
								<option value="5">soal 5</option>
								<option value="6">soal 6</option>
								<option value="7">soal 7</option>
								<option value="8">soal 8</option>
								<option value="9">soal 9</option>
								<option value="10">soal 10</option>
                            </select>
                        </dd>
                    </dl>
					<dl>
                        <dt><label for="upload">Upload Solusi :</label></dt>
                        <dd><input type="file" name="userfile" /></dd>
                    </dl>
					<dl class="submit">
						<input type="submit" name="submit" id="submit" value="Enter" />
					</dl>
				</form>
			</div>
		</div>
	</div>
	<?php include('footer.php');?>
</body>
</html>