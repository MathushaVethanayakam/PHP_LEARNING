  <html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<?php
			echo "<h1>Arrays</h1>";
			#array 3 types
			// 1.index array-arrays with numberic index
			// 2.associative arrays- arrays with named keys
			// 3.multidimensional arrays- arrays containing one or more arrays

			$cars=array("Volvo", "BMW", "Toyota");
			print_r($cars);
			echo count($cars);
			echo "<br>";
			
			//$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction); --- Array items of four different data types
			var_dump($cars);
			echo $cars[0]; // access index Array
			echo "<br>";
			
			#change array value
			$cars[1]="Ford";
			print_r($cars);
			echo "<br>";
			
			#loop through the index
			foreach($cars as $x)
			{
				echo "$x <br>";
			}
			array_push($cars,"BMW"); // push a item to array
			var_dump($cars);
			echo "<br>";
			
			$cars[5]="ambas";
			var_dump($cars);
			echo "<br>";
			
			#associative array
			$person=array("name"=>"mathu","age"=>25,"address"=>"batti");
			var_dump($person);
			echo "<br>".$person["age"];
			$person["name"]="mathus";
			var_dump($person);
			echo "<br>";
			
			#loop through associative array
			foreach($person as $x=>$y)
			{
				echo "$x:$y<br>";
			}
			
			#array keys
			$cars=[0=>"car1",1=>"car2",2=>"car3"];
			$mycar=["brand"=>"ford","model"=>"mustang","year"=>1964];
			var_dump($cars);
			echo "<br>";
			var_dump($mycar);
			echo "<br>";
			
			#create array
			$student=[];
			$student[0]="mathu";
			$student[1]="mayu";
			$student[2]="mathan";
			print_r($student);
			echo "<br>";
			
			$myArr = [];
			$myArr[0] = "apples";
			$myArr[1] = "bananas";
			$myArr["fruit"] = "cherries";
			var_dump($myArr);
			echo "<br>";
			
			$fruits = array("Apple", "Banana", "Cherry");
			$fruits[] = "Orange";
			print_r($fruits);
			echo "<br>";
			
			$cars = array("brand" => "Ford", "model" => "Mustang");
			$cars["color"] = "Red";
			print_r($cars);
			echo "<br>";
			
			array_push($fruits,"papaw","pineapple");
			print_r($fruits);
			echo "<br>";
			
			#Add multiple items to associative array
			$cars+=["number"=>"125"];
			print_r($cars);
			echo "<br>";
			
			#delete item in Array
			array_splice($fruits,1,1); // it re arrange the index from 0
			print_r($fruits);
			echo "<br>";
			
			$letters=array("A","B","C","D");
			unset($letters[1]); // doesn't re-arrange the index 0 2 3
			print_r($letters);
			echo "<br>";
			
			$cars = array("Volvo", "BMW", "Toyota");
			array_splice($cars, 1, 2); // delete items from index 1 to 2 items
			print_r($cars);
			echo "<br>";
			
			$letters=array("A","B","C","D");
			unset($letters[1],$letters[2]);
			print_r($letters);
			echo "<br>";
			
			#remove item from associative array
			$cars = array("brand" => "Ford", "model" => "Mustang");
			unset($cars["model"]);
			print_r($cars);
			echo "<br>";
			
			#remove last item
			$letters=array("A","B","C","D");
			array_pop($letters);
			print_r($letters);
			echo "<br>";
			
			#remove first element of Array
			array_shift($letters); // re arrange index from 0
			print_r($letters);
			echo "<br>";
			
			echo "<h1>Sorting</h1>";
			#sort arrays in ascending order
			$letter=array("e","b","a","c","d");
			sort($letter);
			print_r($letter);
			echo "<br>";
			
			#sort arrays in descending order
			rsort($letter);
			print_r($letter);
			echo "<br>";
			
			# sort associative arrays in ascending order, according to the value
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
			asort($age);
			print_r($age);
			echo "<br>";
			
			#ksort() - sort associative arrays in ascending order, according to the key
			ksort($age);
			print_r($age);
			echo "<br>";
			
			#arsort() - sort associative arrays in descending order, according to the value
			arsort($age);
			print_r($age);
			echo "<br>";
			
			#krsort() - sort associative arrays in descending order, according to the key
			krsort($age);
			print_r($age);
			echo "<br>";
			
			#multidimensional Array
			$product=array(array("book",125,5),array("pen",20,5),array("pencil",10,6));
			echo $product[1][0];
			
			for($row=0; $row<3; $row++)
			{
				echo "<ul>";
				for($col=0; $col<3; $col++)
				{
					echo "<li>".$product[$row][$col]."</li>";
				}
				echo "</ul>";
			}
		?>
	</body>
</html>