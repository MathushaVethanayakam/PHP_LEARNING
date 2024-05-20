<?php
	echo "<h1>class and objetcs</h1>";
	class Fruits{
		//properties-variables are called properties
		public $name;
		public $color;
		
		//methods
		function set_name($name)
		{
			$this->name=$name; // this keyword is used within classes to refer to the current instance of the class.It allows you to access properties and methods of the current object within its context. 
		}
		function get_name()
		{
			return $this->name;
		}
	}
	
	$apple=new Fruits();
	$banana=new Fruits();
	
	$apple->set_name('Apple');
	$banana->set_name('Banana');
	
	echo $apple->get_name();
	echo "<br>";
	echo $banana->name."<br>";

	class car{
		public $name;
		
		function set_name($n)
		{
			$this->name=$n;
		}
		function get_name()
		{
			echo $this->name."<br>";
		}
	}
	$audi=new car();
	$audi->set_name("audi");
	$audi->get_name();
	
	$bmw=new car();
	$bmw->set_name("bmw");
	$bmw->get_name();
	echo var_dump($audi instanceof car); // check object audi's class car or not.
	
	#constructor 
	echo "<h1>Constructor</h1>";
	class person{
		public $name;
		function __construct($name,$age){ //1.parameter constructor
			$this->name=$name;
			$this->age=$age;
		}
		function get()
		{
			echo "<br>Name : ".$this->name."<br> Age : ".$this->age;
		}
	}
	$obj1=new person("Abc",25);
	$obj1->get();
	
	$obj2=new person("Pqr",48);
	$obj2->get();
	
	class animal{
		public $name;
		function __construct() //2.default constructor
		{
			$this->name="dog";
		}
		function get_name()
		{
			echo "<br>Name : ".$this->name."<br>";
			
		}
	}
	$dog=new animal();
	$dog->get_name();
	
	
	
	
	
?>
<?php
	#access modifier
	
	
	class Fruit_1 {
		public $name;
		protected $color;
		private $weight;
	}

	$mango = new Fruit_1();
	$mango->name = 'Mango'; // OK
	//$mango->color = 'Yellow'; // ERROR
	//$mango->weight = '300'; // ERROR
?>	
<?php
	echo "<h1>Inheritance</h1>";
	class fruit_2{
		public $name;
		public $color;
		
		function __construct($n,$c)
		{
			$this->name=$n;
			$this->color=$c;
		}
		function get()
		{
			echo "The fruit name is {$this->name} and The fruit color is {$this->color}";
		}
	}
	class strawberry extends fruit_2{
		function child(){
			echo "<br> Am I fruit or berry!";
		}
	}
	$obj=new strawberry("strawberry","red");
	$obj->get();
	$obj->child();
	
	
	#destructor 
	echo "<h1>destructor</h1>";
	
	
	class Fruit {
	  public $name;
	  public $color;

	  function __construct($name,$color) {
		$this->name = $name;
		$this->color=$color;
	  }
	  function __destruct() {
		echo "The fruit is {$this->name}.<br>";
	  }
	}

	$apple = new Fruit("Apple","red");
	$papaw = new Fruit("Papaw","green");
	$banana = new Fruit("Banana","yellow");
//A destructor is called when the object is destructed or the script is stopped or exited.

?>
