  <html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<?php
			echo "<h1>if else </h1>";
			# if else with operators
			if(5>3)
			{
				echo "have a nice day";
			}
			echo "<br>";
			$age=25;
			
			if($age >18)
			{
				echo "Hi!";
			}
			echo "<br>";
			if($age == 25)
			{
				echo "hello!";
			}
			echo "<br>";
			$a=200;
			$b=33;
			$c=500;
			
			if($a>$b && $a<$c)
			{
				echo "both conditions";
			}
			echo "<br>";
			
			if($a==200 || $b==100)
			{
				echo "numbers";
			}
			echo "<br>";
			
			$t=date("H");
			if($t < "20") //current time less than 20
			{
				echo "Have a good day";
			}
			else
			{
				echo "Have a good night";
			}
			echo "<br>";
			
			#shorthand if
			$a=13;
			if ($a > 10) $b ="hello";
			echo $b;
			echo "<br>";
			
			$b=$a<10 ? "Hi" : "bye"; //ternary operator
			echo $b;
			echo "<br>";
			
			#nested if
			$marks=80;
			if($marks>50)
			{
				echo "above 50";
				if($marks>75)
				{
					echo " A";
				}
				else
				{
					echo " B";
				}
			}
			
			echo "<h1>Switch</h1>";
			#Switch
			
			$color="red";
			
			switch($color)
			{
				case "red":
					echo "red color";
					break;
				case "blue":
					echo "blue color";
					break;
				case "green":
					echo "green color";
					break;
				default :
					echo "your choice";
			}
			
			echo "<br>";
			$day=3;
			switch($day)
			{
				case 1:
				case 2:
				case 3:
				case 4:
				case 5:
					echo "Week day";
					break;
				case 6:
				case 7:
					echo "weekend day";
					break;
				default :
					echo "something went wrong";
			}
			
			echo "<br>";
			echo "<h1>While loop</h1>";
			#while loop
			$i=0;
			while($i<3)
			{
				echo $i," ";
				$i++;
			}
			echo "<br>";
			while($i<6)
			{
				echo $i," ";
				if($i==4) break;
				$i++;
			}
			echo "<br>";
			$j=2;
			/*while($j<8)
			{
				if($j==4){
					continue;
				}
				echo $j," ";
				$j++;
				
			}
			echo "<br>";
			while($j<12): //we can use also endwhile statement
				echo $j," ";
				$j++;
			endwhile;
			echo "<br>";
			*/
			echo "<h1>do while loop</h1>";
			# do while loop
			$k=1;
			do{
				echo $k," ";
				$k++;
			}while($k<5);
			
			echo "<br>";
			echo "<h1>For loop</h1>";
			#for loop
			for ($i=1; $i<=10; $i++)
			{
				echo "number $i<br>";
			}
			echo "<br>";
			for ($i=1; $i<=10; $i++)
			{
				if ($i==5) break;
				echo "number $i<br>";
			}
			echo "<br>";
			for ($i=1; $i<=10; $i++)
			{
				if ($i==5) continue;
				echo "number $i<br>";
			}
			
			echo "<h1>Foreach loop</h1>";
			#Foreach loop
			$colors=array("red","black","blue","green");
			
			foreach($colors as $x)
			{
				echo $x,", ";
			}
			echo "<br>";
			
			$age=array("kamal"=>25,"peter"=>28,"kannan"=>29);
			foreach($age as $x=>$y)
			{
				echo "$x : $y <br>";
			}
			
			
			echo "<h1>Functions</h1>";
			#functions
			function myMessage()
			{
				echo "hello world<br>";
			}
			myMessage();
			
			function family_members($fname)
			{
				echo "$fname<br>";
			}
			family_members("mathu");
			family_members("mayu");
			family_members("mathan");
			
			function setHeight($minheight = 50) {
			  echo "The height is : $minheight <br>";
			}

			setHeight(350);
			setHeight(); // will use the default value of 50
			setHeight(135);
			setHeight(80);
			
			function sum($x,$y)
			{
				$z=$x+$y;
				return $z;
			}
			echo "5+8=".sum(5,8)."<br>";
			
			function add_five(&$value) {
			  $value += 5;
			}

			$num = 2;
			add_five($num);
			echo $num; // 7
			echo "<br>";
			
			$number=2;
			function mul(&$num)
			{
				$num*=5;
			}
			$multiplication =mul($number);
			echo $number."<br>";
			
			#anonymous function
			$name=function($first,$last)
			{
				return ("$first $last");
			};
			echo $name("mathu","vetha")."<br>"; //with out function name , we pass the value to the argument
		?>
		
	</body>
</html>