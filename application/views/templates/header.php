<!DOCTYPE html>
<html lang="en">
<head>
	<link href="/resources/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>


<div class="container" style="background-color: #000; margin-bottom: 10px">
	<img src="/resources/images/header.jpg" />
	<div style="float: right; color: #CCC; margin-right: 20px; margin-top: 30px;"><strong>JOIN THE MEDIA REVOLOUTION | <span style="color: #FFF"> REBOOTING JOURNALISM</span></strong></div>
</div>

<?php
	$navactive=array("", "join", "events", "about", "privacypolicy");
	$key=array_search($this->uri->segment(1), $navactive);
	$navclasses=array_fill(0,5,"");
	if ($key!==false) {
		$navclasses[$key]='class="active"';
	}
?>
<div class="container">
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav">
				<li <?= $navclasses[0] ?>>
					<a href="<?= base_url() ?>">Home</a>
				</li>
				<li <?= $navclasses[1] ?>><?= anchor("join", "Join the Revolution") ?></li>
				<li <?= $navclasses[2] ?>><?= anchor("events", "Events") ?></li>
				<li><a href="http://lists.hackshackers.co.za/listinfo/hackshackers">Mailing List</a></li>
				<li <?= $navclasses[3] ?>><?= anchor("about", "About") ?></li>
				<!--<li <?= $navclasses[4] ?>><a href="#">Privacy Policy</a></li>-->
				<li><a href="http://hackshackers.com/">hackshackers.com</a></li>
			</ul>
		</div>
	</div>
</div>
</div>