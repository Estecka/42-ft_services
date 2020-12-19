<?php
$host = $_SERVER['HTTP_HOST'];
?>
<html>
	<head>
		<title>Abaur's ft_service</title>
		<meta name="author" content="abaur"/>
	</head>
	<body>
		<h1>ft_services</h1>
		<h2>by abaur</h2>
		<p>
			<span title=":3c">Hellow World.</span>
		</p>
		<p>
			<b>Host IP</b>: <?=$host?>
		</p>
		<ul>
			<li><a href="http://<?=$host?>:9090">Kubernetes Dashboard</a></li>
			<li>
				Nginx:
				[<a href="http://<?=$host?>">http</a>]
				[<a href="https://<?=$host?>">https</a>]
			</li>
			<li>
				PhpMyAdmin:
				[<a href="https://<?=$host?>:5000">:5000</a>]
				[<a href="https://<?=$host?>/phpmyadmin">/phpmyadmin</a>]
			</li>
			<li>
				Wordpress:
				[<a href="https://<?=$host?>:5050">:5050</a>]
				[<a href="https://<?=$host?>/wordpress">/wordpress</a>]
			</li>
		</ul>
	</body>
</html>
