<html>
	<head>
	<title> Crear GRUPO </title>
	</head>
		<body>
		<h1>CREAR GRUPO</H1>
			<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
			?>
			<table>
				<tr><th>Nombre del grupo</th><td><input type="text" name="group"></td></tr>
				<tr><td></td><td><input type="submit" name='create_group'></td></tr>
			</table>
			</form>
		</body>
</html>