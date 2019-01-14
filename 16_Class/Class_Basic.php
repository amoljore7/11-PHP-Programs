<?php
class Books{
 /* Member variables */
 var $price;
 var $title;
 /* Constructor */
 function __construct(  ){
 echo "In constructor";
}
/*
 function __construct( $par1, $par2 ){
 $this->price = $par1;
 $this->title = $par2;
}
*/
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

$physics = new Books;
$maths = new Books;
$chemistry = new Books;
$physics->setTitle( "Physics for High School" );
$chemistry->setTitle( "Advanced Chemistry" );
$maths->setTitle( "Algebra" );
$physics->setPrice( 10 );
$chemistry->setPrice( 15 );
$maths->setPrice( 7 );
echo $physics->getTitle();
echo $chemistry->getTitle();
echo $maths->getTitle();
echo $physics->getPrice();
echo $chemistry->getPrice();
echo $maths->getPrice();
?>