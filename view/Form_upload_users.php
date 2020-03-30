<html>
	<head>
	<title> SUBIR USUARIOS </title>
	</head>
		<body>
		<h1>CREAR USUARIOS MASIVAMENTE DESDE UN CSV</H1>
			<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST' enctype='multipart/form-data'>";
			?>
			<table>
				<tr><td>Seleccionar Archivo</td><td>Confirmar</td></tr>
				<tr><td><input type="file" name="file"/></td><td><input type="submit" name="upload"></td></tr>
			</table>
			</form>
		</body>
</html>
