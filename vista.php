<!DOCTYPE html>
<html>
<head>
	<title>MVC</title>
</head>
<body>
	<form method="post" action="index.php">
		<label for="data">Introduce un valor:</label>
		<input type="text" id="data" name="data">
		<button type="submit">Enviar</button>
	</form>
	<?php
		if (isset($message)) {
			echo '<p>' . $message . '</p>';
		}
	?>
</body>
</html>