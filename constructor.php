<?php

class Student{

  public function __constructor($student_name){
  
      $this->student_name = $student_name;
      }
 }
 
 $student1 = new Student("Ramit");
 echo $student1->student_name;
      
      
?>

