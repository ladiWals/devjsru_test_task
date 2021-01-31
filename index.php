<?php
	require ('dogs.php');
?>
<!DOCTYPE html>
<head>
	<title>my first test-task</title>
	<link href="styles.css" rel="stylesheet">
</head>
<body>
	<div class="main">
		<form method="POST">
			<input name="newCommand" size="40" placeholder="Введите команду">
			<br>
			<input type="submit" name="submit" value="дать команду">
			<br>	
			<label>here will be output</label>
		</form>
	</div>
	<br>
	<pre>
		<?php
			var_dump($_POST);
		?>
	</pre>
</body>