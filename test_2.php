<?php

$x = '3';
$y = &$x;
$y = "3$y";

echo $x;


?>

	<!DOCTYPE>
	<html>
	<head>
		<title>Test</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript">
			function gotest() {
				$('#myidentifier\\.3').text('etc etc!');
			}
			
		</script>
	</head>
	<body>
		<button onclick="gotest()"> TEST IDENTIFIER</button>
	<div id="myidentifier.3">
		here myidentifier.3
	</div>
	</body>
	</html>