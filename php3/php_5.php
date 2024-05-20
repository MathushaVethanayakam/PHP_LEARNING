  <html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<form method="post" action="" id="form">
			
			<label>Name</label>
			<input type="text" name="name" required><br>
			<label>Password</label>
			<input type="password" name="password" required><br>
			<label>Email</label>
			<input type="email" name="email" required><br>
			<button type="submit" name="submit">Register</button>
		</form>
		<?php
		
			if($_GET)
			{
				echo print_r($_GET);
			}
			elseif($_POST)
			{
				echo print_r($_POST);
			}
			
			#GET method- GET requests are used to request data from a specified resource.
			//Data is appended to the URL in the form of query parameters.
			
			#POST method- POST requests are used to submit data to be processed to a specified resource.
			//Data is sent in the request body, which is not visible in the URL.
			//Data is not visible in the URL, providing better security and privacy.
			
			
		?>
	</body>
</html>