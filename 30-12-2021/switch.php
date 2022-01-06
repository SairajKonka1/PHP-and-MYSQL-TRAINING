  <?php
  
  $marks = 88;
  
  switch($marks){
  case ($marks < 40):
   echo "fail";
   break;
   
   case ($marks >=40 && $marks < 50):
   echo "third position";
   break;
   
   case ($marks >= 50 && $marks < 75):
   echo "second Position";
   break;
   
   case ($marks >= 75 && $marks <= 100):
   echo "first position";
   break;
   
   default:
   echo "This is not a valid number";
  }
  
  ?>
