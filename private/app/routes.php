<?php 
	$router = [
		"home" 				=> ["home.php", 			false],
		"foodtrucks" 		=> ["foodtrucks.php", 		false],
		"foodtruck" 		=> ["foodtruck.php", 		false],
		"add-foodtruck" 	=> ["add-foodtruck.php", 	true],
		"edit-foodtruck" 	=> ["edit-foodtruck.php", 	true],
		"delete-foodtruck" 	=> ["delete-foodtruck.php", true],
		"contact" 			=> ["contact.php", 			false],
		"profile" 			=> ["profile.php", 			true],
		"settings" 			=> ["settings.php", 		true],
		"register" 			=> ["register.php", 		false],
		"login" 			=> ["login.php", 			false],
		"lostpwd" 			=> ["lostpwd.php", 			false],
		"renewpwd" 			=> ["renewpwd.php", 		false],
		"logout" 			=> [null, 					true],
		"404" 				=> ["404.php", 				false]
	];
?>