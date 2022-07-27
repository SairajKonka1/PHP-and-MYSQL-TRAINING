<html>

<body>
	<?php
		function func1(){
		
		$colors = array("first"=>"red","second"=> "green","Third"=> "blue","fourth"=> "yellow"); 
		
		foreach($colors as $key=>$value){
			echo "Key is $key and value is $value";
			echo "<br>";
		}
				
		}
			
		func1();	
	?>

</body>


</htmL>
