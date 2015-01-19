<!DOCTYPE html>
<html>
<head>
	<title>Huijari</title>
	<style>
		html, body {
			height: 100%;
			margin: 0px;
			background: #37C;
			color: #fff;
			font: normal 350px 'Segoe UI';
		}
	</style>
</head>
<body>

	<?php 
		$count = fopen('count', 'r');
		$num = fgets($count) + 1;
		echo $num;
		fclose($count);

		$count = fopen('count', 'w');
		fputs($count, $num);
		fclose($count);
	?>
	
</body>
</html>