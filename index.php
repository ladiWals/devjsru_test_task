<?php
	require ('dogs.php');
	if($_POST) {
		$explodedPost = explode(' ', $_POST['newCommand']);
		if(count($explodedPost) === 2) {
			$breed = $explodedPost[0];
			$command = $explodedPost[1];
			$dog = new $breed;
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
			<input type="submit" name="submit" value="дать команду">
			<br>	
			<label><?=$dog->$command()?></label>
		</form>
		<br>
	</div>
</body>