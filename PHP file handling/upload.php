<html>
	<head>
		<title>PHP FILE UPLOAD</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data" id="form
			<label for="fileSelect">select file upload:</label>
			<input type="file" name="file" id="fileSelect">
			<input type="submit" name="submit" value="submit">
			<p><strong>Note:</strong>Only .pdf, .docx formats.</p>
			
		</form>	
		<?php
			if(isset($_POST['submit']))
			{
				$allow=array("pdf"=>"application/pdf","doc"=>"application/msword");
				$name=$_FILES["file"]["name"];
				$type=$_FILES["file"]["type"];
				$ext=pathinfo($name,PATHINFO_EXTENSION);
				
				if(!array_key_exists($ext,$allow)) die("Please select valid file format");
				if(in_array($type,$allow))
				{
					if(file_exists("Files/".$_FILES["file"]["name"]))
					{
						echo "This file is already exixts";
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],"Files/".$_FILES["file"]["name"]);
						echo "YOUR FILE WAS UPLOADED SUCCESSFULLY";
					}
				}
				
			}
		
		?>
	</body>
</html>