<?php
//class defination
   class Books 
    {
      /* Member variables */
      var $price;
      var $title;

	// constructor
	function __construct( $par1, $par2 ) 
	{
	   $this->title = $par1;
	   $this->price = $par2;
	}
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }

//creating objects
$physics = new Books;
$maths = new Books;
$chemistry = new Books;

// calling member functions

$physics->setTitle( "Physics for High School" );
$chemistry->setTitle( "Advanced Chemistry" );
$maths->setTitle( "Algebra" );

$physics->setPrice( 10 );
$chemistry->setPrice( 15 );
$maths->setPrice( 7 );

// Inheritance 
class Novel extends Books 
{
   var $publisher;
   
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
}

// Interface
interface Mail 
{
   public function sendMail();
}

class Report implements Mail 
{
   // sendMail() Definition goes here
}

// Constant chracteristics
class MyClass 
{
   const requiredMargin = 1.7;
   
   function __construct($incomingValue) 
{
      // Statements here run every time
      // an instance of the class
      // is created.
   }
}

// abstract class
abstract class MyAbstractClass 
{
   abstract function myAbstractFunction() {}
}

// static characteristics
   class Foo {
      public static $my_static = 'foo';
      
      public function staticValue() {
         return self::$my_static;
      }
   }
	
   print Foo::$my_static . "\n";
   $foo = new Foo();
   
   print $foo->staticValue() . "\n";

// final method
   class BaseClass {
      public function test() {
         echo "BaseClass::test() called<br>";
      }
      
      final public function moreTesting() {
         echo "BaseClass::moreTesting() called<br>";
      }
   }
   
   class ChildClass extends BaseClass {
      public function moreTesting() {
         echo "ChildClass::moreTesting() called<br>";
      }
   }

?>



