<html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<?php
			#---String Length---
			echo "<h1>Strings</h1>";
			echo strlen("Hello world! "); //length of string
			echo "<br>";
			echo str_word_count("Hello world"); //how many words in the text
			echo "<br>";
			echo strpos("Mathu Vetha","Mathu"); //it return matching first character position - M start at 0 so result is 0
			echo strpos("Hello world!", "world");//output is 6 because world start at index 6.
			echo "<br>";
			
			echo "<h1>Modify String</h1>";
			
			#uppercase
			$x="Hello world!";
			echo strtoupper($x);
			echo "<br>";
			echo ucwords($x);
			echo "<br>";
			
			#lowercase
			echo strtolower($x);
			echo "<br>";
			
			#replace
			echo str_replace("world","hi",$x);
			echo "<br>";
			
			#reverse string
			echo strrev($x);
			echo "<br>";
			
			#remove white space
			echo trim($x);
			echo "<br>";
			
			#convert string into array
			$y=explode(" ",$x);
			print_r($y); //Array ( [0] => Hello [1] => world! )
			
			#concatenate string
			echo "<h1>Concatenate String</h1>";
			$name1="Hello";
			$name2="World";
			$name=$name1.$name2;
			echo $name;
			echo "<br>";
			$name3="$name1$name2";
			echo $name3;
			echo "<br>";
			
			#sort
			$colors=array("red","green","blue","pink");
			sort($colors);
			foreach($colors as $value)
			{
				echo "$value ";
			}
			echo "<br>";
			rsort($colors); // reverse sort
			foreach($colors as $value)
			{
				echo "$value ";
			}
			echo "<br>";
			
			
			#Slicing
			$x="Hello World";
			echo substr($x,6,5); //World
			echo "<br>";
			
			echo substr($x,6); //Slice to the end
			echo "<br>";
			echo substr($x,-5,3); //Wor
			echo "<br>";
			
			$x="Hi, how are you?";
			echo substr($x,5,-3); //ow are y
			echo "<br>"; 
			
			echo "<h1>Numbers</h1>";
			$x = 598558;
			var_dump(is_int($x)); //check whether it is integer or not
			
			var_dump(is_float(1.56)); //check whether it is float or not
			
			$y=1.9e411;
			var_dump($y);
			
			$z=acos(8);
			var_dump($z);
			
			$x = "59.85" + 100;
			var_dump(is_numeric($x));
			
			$x="Hello";
			var_dump(is_numeric($x));
			
			
			#casting
			echo "<h1>Casting</h1>";
			
			$a=8;
			$b=5.89;
			$c="hello";
			$d=true;
			$e=NULL;
			
			$a=(string)$a;
			$b=(string)$b;
			$c=(string)$c;
			$d=(string)$d;
			$e=(string)$e;
			
			var_dump($a);
			var_dump($b);
			var_dump($c);
			var_dump($d);
			var_dump($e);
			
			echo "<br>";
			
			$ab=true;
			$ab=(int)$ab;
			var_dump($ab); // int (1)
			
			$cd=null;
			$cd=(int)$cd;
			var_dump($cd); // int (0)
			var_dump(""); // string
			
			$a=(array)$a;
			var_dump($a); /*array(1) { [0]=> string(1) "8" }*/
			
			#math functions
			echo "<h1>PHP Math functions</h1>";
			echo(pi());
			echo "<br>";
			echo(min(10,50,40,80,2,5));
			echo "<br>";
			echo(max(10,50,40,80,2,5));
			echo "<br>";
			echo(abs(-7.5));
			echo "<br>";
			echo(sqrt(64));
			echo "<br>";
			echo (rand());
			echo "<br>";
			echo(round(7.895));
			echo "<br>";
			echo(rand(10, 100)); // random number between 10 and 100
			
			#Operators (arithmetic,comparisan,assignment,increment/decrement,logical operators,string operators)
			echo "<h1>Operators</h1>";
			
			#arithmetic Operators(+,*,/,-,%,**)
			$a=10;
			$b=20;
			echo $a*$b;
			echo "<br>";
			
			#assignment Operators(*=,+=,-=,%=)
			$a+=$b;
			echo $a;
			echo "<br>";
			
			$a%=$b;
			echo $a;
			echo "<br>";
			
			#comparison Operators
			// $a==$b return  true if $a and $b equal
			// $a===$b(identical) return  true if $a equal to $b  and $a and $b same type
			// != not equal
			//>= greater than or equal , <= less than or equal
			
			
			#Increment/Decrement
			$c=10;
			$d=$c++;
			$e=20;
			$f=++$e;
			echo $d," ",$c," ",$f," ",$e; // 10 11 21 21
			echo "<br>";
			
			$c=15;
			$d=$c--;
			$e=25;
			$f=--$e;
			echo $d," ",$c," ",$f," ",$e; // 15 14 24 24
			echo "<br>";
			
			#logical Operators
			//and , or, xor,&&,||,!
			
			
		?>
	</body>
</html>