<html>
	<head>
	<title> Crear Usuario </title>
	</head>
		<body>
		<h1>CREAR USUARIO</H1>
			
			<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
			?>
			 <table>
				 <tr><td>USUARIO</td><td><input type="text" name="username"></td></tr>
				 <tr><td>CONTRASEÑA</td><td><input type="pasword" name="passw"></td></tr>
				 <tr><td>DEPARTAMENTO</td><td><input type="text" name="department"></td></tr>
				 <tr><td>DIRECTORIO</td><td><input type="text" name="folder"></td></tr>
				 <tr><td>GRUPO</td><td><input type="text" name="groupname"></td></tr>			  
				 <tr><td></td><td><input type="submit" name='create'></td></tr>
			 </table>
			</form>
		</body>
</html>