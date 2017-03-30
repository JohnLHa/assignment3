<?php 
	function __autoload($ParentClass){
		require_once $ParentClass . '.php';
	}

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Assignment 3</title>
		<link rel="stylesheet" href="assignment3.css">
	</head>
	<body>
		<h4> Sorry, I don't know why it's causing an error. =/ </h4>
		<div id="classes">
			<?php
				$A[] = new ChildClass("Joe", 14, "Firepusher", FALSE, 0);
				$A[] = new ChildClass("Mary", 12, "QueenBee", TRUE, 35);
				$A[] = new ChildClass("Arran", 16, "WhiteMage", TRUE, 59);
				$A[] = new ChildClass("Christine", 15, "Plantgirl", FALSE, 0);
				
				foreach($A as $player){
					echo "$player<br/>";
					$player->toString();//Prints out list of players and their status for the game membership
				}
			?>
			
		</div>
	</body>
</html>