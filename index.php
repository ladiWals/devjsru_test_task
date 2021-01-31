<?php
	require ('dogs.php'); 
	$methodError = false;
	$classError = false;
	$argumentError = false;
	$success = false;
	if($_POST) {
		$explodedPost = explode(' ', $_POST['newCommand']);
		if(count($explodedPost) === 2) {
			$breed = $explodedPost[0];
			$command = $explodedPost[1];
			if (class_exists($breed)) {
				if(method_exists($breed, $command)) {
					$dog = new $breed;
					$success = true;
				} else {
					$methodError = true;
				}
			} else {
				$classError = true;
			}
		} 
		if(count($explodedPost) != 2) {
			$argumentError = true;
		} 
	}
?>
<!DOCTYPE html>
<head>
	<title>my first test-task</title>
	<link href="styles.css" rel="stylesheet">
</head>
<body>
	<div class="main">
		<form method="POST">
			<input name="newCommand" size="40" placeholder="dog - command">
			<br>
			<input type="submit" name="submit" value="give a command">
			<br>	
			<label style="color:<?=$success ? ' green;' : ' #c33;'?>">
				<?php 
				if($argumentError) {
					echo 'expected 2 arguments - breed of dog and command to dog';
				} elseif($classError) {
					echo '"' . $breed . '" breed does not exist';
				} elseif($methodError) {
					echo $breed . ' cant obey the command "' . $command . '"';
				}
				else {
					$dog->$command();
				}
				?>
			</label>
		</form>
		<br>
	</div>
</body>