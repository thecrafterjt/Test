<?php
$text = $_POST['site'];
if(!$text){
	$text = "Startseite";
}
$box1 = "normal";
$box2 = "normal";
$box3 = "normal";
$background_image = "img1.jpg";
if($text == "Startseite"){
	$box1 = "active";
	$iframe_url = "/sites/" . $text . ".php";
	$background_image = "0_original.gif";
}
if($text == "Shop"){
	$box2 = "active";
	$iframe_url = "http://gcreturn.buycraft.net/";
}
if($text == "Disclaimer"){
	$box1 = "active";
	$iframe_url = "/sites/" . $text . ".php";
}
if($text == "Impressum"){
	$box1 = "active";
	$iframe_url = "/sites/" . $text . ".php";
}
?>

<html>
<style>
	body{
		background-image: url("src/<?php echo $background_image;?>");
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		background-color: #b3b3b3;
	}
	.left{
		float:left;
		padding-left: 30px;
		position: fixed;
	}
	.fixed{
		position: fixed;
	}
	.right{
		float: right;
		padding-right: 0px;
	}
	#mobile{
		width: 950px;
		position: fixed;
		margin-top: 0px;
		padding-top: 0px;
	}
	h1{
		text-shadow: 3px 3px 3px #000;
	}
	a:link{
		color: #FFF;
	}
	a:visited{
		color: #FFF;
	}
	a:hover{
		color: #FFF;
	}
	a{
		text-decoration: none;
	}
</style>
<head>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<link rel="stylesheet" href="/boot/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css">
		<link rel="stylesheet" href="buttons.css">
		<link href='//fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
		<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
		<title> GamerKammer.net &middot; <?php echo $text;?></title>
		<script>
			function sub_Disclaimer() {
				var form = document.forms.sub_Disclaimer;
				form.submit();
			}
			function sub_Impressum() {
				var form = document.forms.sub_Impressum;
				form.submit();
			}
		</script>
</head>
<body>
	<div id="moblie">
	
	</div>
	<div id="header">
		<div id="image_and_text">
					<img src="/src/logo.png" class="left">
		</div>
		<div id="player_online">
			<br>
			<div>
				<center>
					<iframe src="players.php" width="100%" height="100%" style="border: none;">
					
					</iframe>
				</center>
			</div>
		</div>
		<div id="buttons">
			<center>
				<div id="button_box_right">
					<form action="/" method="POST">
						<input type="submit" id="button-<?php echo $box1;?>" value="Startseite" style="width: 90px;">
						<input type="hidden" name="site" value="Startseite">
					</form>
				</div>
				<div id="button_box_right">
					<form action="/" method="POST">
						<input type="submit" id="button-<?php echo $box3;?>" value="Forum" style="width: 90px;">
					</form>
				</div>
				<div id="button_box_right">
					<form action="http://shop.gamerkammer.net" method="POST">
						<input type="submit" id="button-<?php echo $box2;?>" value="Shop" style="width: 90px;">
						<input type="hidden" name="site" value="Shop">
					</form>
				</div>
			</center>
		</Div>
		<br>
	</div>
	<center><div id="site">
		<iframe src="<?php echo $iframe_url;?>" height="100%<!--2798px -->" width="100%" style="border: none;"> 
		
		</iframe>
	</div></center>
	<form name="sub_Disclaimer" action="/" method="POST">
		<input type="hidden" name="site" value="Disclaimer"> 
	</form>
		<form name="sub_Impressum" action="/" method="POST">
		<input type="hidden" name="site" value="Impressum"> 
	</form>

	<footer>
	<h1><font size="3px" color="#FFF">
		<div class="footer">
				<center>
					<p>©2016-2017 GamerKammer.net | 
					<a href="javascript: sub_Impressum();" style="text-decoration:none;"> »Impressum« </a> |
					<a href="javascript: sub_Disclaimer();" style="text-decoration:none;"> »Disclaimer« </a> |
					Webseite entwickelt von mincrafterjt</p>
				</center>
		</div>
	</font></h1>
	</footer>
</body>
</html>
