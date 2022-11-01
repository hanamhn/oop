<?php 

class Cars{
	function greeting(){
		echo "Hello World!";
	}

}

$the_methods = get_class_methods('Cars');

foreach($the_methods as $value){
	echo $value."<br/>";
}

?> 