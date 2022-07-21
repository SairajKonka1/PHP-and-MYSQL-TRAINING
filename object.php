<?php 

class Books {

// member variable
  var $price;
  var $title;

//member function

function setPrice($par){
   $this->price= $par;
   }
 function setTitle($tit){
   $this->title =$tit;
   }
   
function getPrice(){
echo "Price of the Books is " .$this->price. "<br>";
  }
  
function getTitle(){
  echo "the Title of My Book is " .$this->title;
}
 } 
  $maths =new Books;
  
  $maths->setPrice(67);
  $maths->setTitle("The untold Story");
  
  $maths->getPrice();
  $maths->getTitle();
 

?>
