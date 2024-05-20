<?php
echo "<h2>override</h2>";
	class fruit{
		public $name;
		public $color;
		public $weight;
		
		function __construct($name,$color){
			$this->name=$name;
			$this->color=$color;
		}
		function get()
		{
			echo "The fruit name is ".$this->name." and the color is ".$this->color."<br>";
		}
		
	}
	class strawberry extends fruit{
		function __construct($name,$color,$weight)
		{
			parent :: __construct($name,$color);
			$this->weight=$weight;
		}
		function get()
		{
			echo parent::get()."The fruit weight is=".$this->weight."KG";
		}

	}
	$s=new strawberry("strawberry","red","10");
	$s->get();
	echo "<br>";
	
	
	echo "<h2>PHP constants</h2>";
	class person_1{
		const a="Person A";
		
	}
	echo person_1::a."<br>";
	
	class person{
		const a="Person A"; // constant variable case sensitive
		
		function display()
		{
			echo self::a; //:: scope resolution operator
		}
	}
	$obj=new person();
	$obj->display();
	
	
	echo "<h2>Abstract class</h2>";
	abstract class person_2{
		abstract function display($s);
	}
	class childA extends person_2{
		
		function display($s)
		{
			echo "$s<br>";
		}
	}
	class childB extends person_2{
		
		function display($s)
		{
			echo "$s<br>";
		}
	}
	$obj1=new childA();
	$obj1->display("ChildA");
	
	$obj2=new childB();
	$obj2->display("childB");
	
	echo "<h1>Trait</h1>";
	
	trait message1{ //PHP only supports single inheritance: a child class can inherit only from one single parent.trait overcome this issue
		function msg1()
		{
			echo "Hello<br>";
		}
	}
	trait message2{ 
		function msg2()
		{
			echo "How are you<br>";
		}
	}
	class welcome1{
		use message1;
	}
	class welcome2{
		use message1,message2;
	}
	$obj1=new welcome1();
	$obj1->msg1();
	$obj2=new welcome2();
	$obj2->msg1();
	$obj2->msg2();
	
	echo "<h1>Static</h1>";
	
	class car{
		static function getname(){
			return "AUDI";
		}	
	} 
	class audi extends car{
		function __construct()
		{
			echo "car name=".parent::getname(); //getname static method directly call
		}
	}
	$obj=new audi();
	
	class Cars{
		public static $name="AUDI";
		
	}
	class AUDI_1 extends Cars{
		function __construct()
		{
			echo "<br>carname:".parent::$name;
		}
	}
	$obj=new AUDI_1();
	
	class greeting {
	    public static function welcome() {
		    echo "<br>Hello World!";
	    }
	}

// Call static method
greeting::welcome();
	
	class Car_1{
		protected $name;
		function __construct()
		{
			$this->name="AUDI";
		}
		function display()
		{
			echo $this->name;
		}
	}
	$obj=new Car_1();
	$obj->display();
	
	class A {
		public static function welcome() {
			echo "<br>Hello World!";
		}
	}

	class B {
	    public function message() {
		    A::welcome();
	    }
	}

	$obj = new B();
	echo $obj -> message();
	
	
	class ClassName {
		public static $staticProp = "W3Schools";
	}
	echo "<br>".ClassName::$staticProp;
?>