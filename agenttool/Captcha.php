<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Agent Authentication</title>
	</head>
	<body><center>
		<img src="http://jareddubina.com/a/Connection.png" />
		<h3>Please provide the following code to the agent</h3>
		<h3><b><font color='006600'>
		<?php

			function generateRandomString($length = 6) {
				$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$randomString = '';
				for ($i = 0; $i < $length; $i++) {
					$randomString .= $characters[rand(0, strlen($characters) - 1)];
				}
				$file=fopen("Codes\\" . $randomString,"a");
				fwrite ($file, $randomString . "\r\n");
				fclose($file);
				return $randomString;
			}
			print generateRandomString();
		?></h3></b></font>
	</body>
</html>