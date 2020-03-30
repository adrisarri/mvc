<html>
	<head>
	<title> Pagina principal </title>
	</head>
		<body>
			<h1>Gestor de Usuarios y grupos</H1>
			<h3>Que deseas hacer?</h3>
			<?php
		echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
			?>
			 <input type="radio" name="option" value="create_user">Crear usuario<br>
			 <input type="radio" name="option" value="list_user">Listar usuarios<br>
			 <input type="radio" name="option" value="create_group">Crear grupo<br>
			 <input type="radio" name="option" value="list_groups">Listar grupos<br>
			 <input type="radio" name="option" value="upload_users">Crear usuarios desde CSV<br><br>
			  <input type="submit" name='submit'>
			</form>
		</body>
</html>