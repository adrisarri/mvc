<html>
	<head>
	<title> Listar Usuarios </title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<?php include 'view/table.php';?>
	</head>
		<body>
		<h1>Listar Usuarios</H1>
			
			<?php
				 echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'><table><tr><th></th><th>Eliminar Usuario</th></tr>";
				 foreach ($usuarios as $valor) {
					if(count($usuarios)-1> $contador){
						$contador=$contador+1;
					    	echo '<tr><td>'.$valor.'</td><td><button name="delete_user" value="'.$valor.'"><span class="glyphicon glyphicon-trash"></span></button></td></tr>';
				 	}
				 }
				 echo "</table></form>";
			?>
		</body>
</html>