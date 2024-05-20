<?php
	
	echo "<h2>Interface</h2>";
	// interface cannot have properties , but abstract class have
	interface Animal_1 {
		public function make_Sound();
	}

	class Cat_1 implements Animal_1 {
		public function make_Sound() {
			echo "Meow";
		}
	}
	
	$animal_1 = new Cat_1();
	$animal_1->make_Sound();
	echo "<br>";
	
	interface animal{
		public function makesound();
	}
	class cat implements animal{
		public function makesound(){
			echo "Meow<br>";
		}
	}
	class dog implements animal{
		public function makesound(){
			echo "Bark<br>";
		}
	}
	class mouse implements animal{
		public function makesound(){
			echo "Squeak<br>";
		}
	}
	$cat =new cat();
	$dog=new dog();
	$mouse=new mouse();
	$animals=array($cat,$dog,$mouse);
	
	foreach($animals as $animal)
	{
		$animal->makesound();
	}

	echo "<h2>Iterable</h2>";
	function printIterable(iterable $myIterable)
	{
		foreach($myIterable as $item)
		{
			echo $item."<br>";
		}
	}
	
	$arr=["a","b","c"];
	printIterable($arr);
	
	function get():iterable{
		return ["a","b","c"];
	}
	$myiter=get();
	foreach($myiter as $myite)
	{
		echo $myite." ";
	}
	
	
	
?>