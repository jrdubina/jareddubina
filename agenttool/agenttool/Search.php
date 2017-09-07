<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Agent Authentication</title>
	</head>
	<body><center>
	<img src="http://jareddubina.com/agenttool/Connection.png" />
		<?php
			$filename = $_GET["code"];
			$lines = file("Codes\\" . $filename);

			if (file_exists("Codes\\" . $filename)) {
				echo "<font color='006600'><h2>The Agent is Validated</h2></font><br />";
			}
			else {
			echo "<font color='red'><h2>This Code is Invalid</h2></font>";
			}

			unlink ("Codes\\" . $filename)
		?>
    </center>
	</body>
</html>
