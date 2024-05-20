<html>
	<head>
	<h2>Mixing php with html</h2>
		<title>PHP</title>
		<style>
			table{
				border: 2px solid #ccc;
				border-collapse:collapse;
			}
			td,th{
				border:2px solid #ccc;
				padding:1px 2px;
			}
		</style>
	</head>
	<body>
		<?php
			#constant
			define("program","PHP");
			echo program." learning<br><br>";
		?>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>No</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Ameer</td>
					<td>28</td>
					<td>123</td>
				</tr>
				<?php
					echo "
					<tr>
						<td>sam</td>
						<td>18</td>
						<td>584</td>
					</tr>
					";
				?>
			</tbody>
		</table>
		<?php
			$a="10";
			echo "<br>".gettype($a); //string
			$a+="10";
			echo "<br>".gettype($a); //integer
			
			$e=20;
			$f=$e+@$d;   // error control operator
			echo "<br>total = ".$f;
		?>
	</body>
</html>