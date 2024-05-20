<html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<?php
		
			#---variables-----
			$name='<h1>php learning</h1>';
			echo "$name<br>";
			echo phpversion();
			echo "<br>";
			
			#----difference between echo and print--- 
			$number=25;
			$address="Batticaloa";
			echo $number," ",$address; //we can print multiple variable at same time using echo
			print "<br>$address"; // we can print only one variable using print 
			
			
			#---case-sensitive----
			$age=25;
			$Age=28;
			echo "<br>$age"; //variables are case-sensitive
			
			
			#---comments-----
			// This is single line comment
			# This is also single line comment
			/*This is multiple 
			line comments in php*/
			
			#---quotes---
			echo "<br>";
			$quotes='\'Hello world\''; //for single or double quotes text using backslash 
			echo $quotes;
			echo '<br>it is $name practice'; //single quotes take all as text
			echo "<br>it is $name practice"; //double quotes take variables seperately
			echo "<br>";
			
			
			#---joining strings----
			
			$first_name= "mathu";
			$last_name="vetha";
			$full_name=$first_name." ".$last_name;
			echo $full_name."<br>";
			echo $first_name." ".$last_name; //concatinate 2 strings
			
			$txt="hello";
			$txt.=" world";
			echo "<br>".$txt;
			
		
			# PHP has 3 variables scopes such as local,global,static
			#---Global variable---
			/* A variable declared outside a function has a global scope
			and can only be accessed outside a function */
			$x=5;
			function myTest()
			{
				echo $x; // error
			}
			myTest();
			echo $x."<br>";
			
			$y=8;
			function myTest1()
			{
				global $x,$y; //The global keyword is used to access a global variable from within a function
				echo $x+$y; // error
			}
			myTest1();
			echo "<br>";
			
			#----local variable----
			/* A variable declared within a function has a local scope
			and can only be accessed within that function*/
			function Test_2()
			{
				$z=84;
				echo $z."<br>";
			}
			Test_2();
			
			#----static ---
			function myTest_3()
			{
				static $a = 0;
				echo $a;
				$a++;
			}
			myTest_3();
			myTest_3();
			myTest_3();
			echo "<br>";
			
			#---Data type---
			// String, Integer, Float, Boolean, Array, Object, NULL, Resource
			var_dump(15);
			echo "<br>";
			var_dump(1.2569);
			echo "<br>";
			var_dump(true);
			echo "<br>";
			var_dump([2,4,5]); // it return data type and value
			echo "<br>";
			$array=[4,5,6];
			var_dump($array);
			echo "<br>";
			$x = null;
			var_dump($x);
			echo "<br>";
			
			$cars=array("Volvo","BMW","Toyota");
			var_dump($cars);
			echo "<br>";
			
			$a = 5;
			$b = 5.34;
			$c = "25";
			var_dump($a);
			var_dump($b);
			var_dump($c);
		?>
	</body>
</html>