<?php
<<<<<<< HEAD

=======
spl_autoload_register('classAutoLoader');
>>>>>>> 866f4bb7b662bd5045c37a9f168e7cab5353c326
function classAutoLoader($class){

$class = strtolower($class);

$the_path = "includes/{$class}.php";

	if(is_file($the_path) && !class_exists($class)){
		include $the_path;
	}

}

<<<<<<< HEAD
spl_autoload_register('classAutoLoader');
=======

>>>>>>> 866f4bb7b662bd5045c37a9f168e7cab5353c326
?>
