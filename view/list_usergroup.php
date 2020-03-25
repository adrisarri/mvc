<html>
	<head>
	<title> Listar Grupos </title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<?php include 'view/table.php';?>
	</head>
		<body>
		<h1>Listar usuarios de grupo</H1>
			
			<?php
				 echo('<table><tr><th>Usuarios del grupo: '.$grupo.' </th></tr>');
				 foreach ($grupos as $valor) {
					if(count($grupos)-1> $contador){
						$contador=$contador+1;
					    	echo '<tr><td>'.$valor.'</td></tr>';
				 	}
				 }
				 echo "</table>";
			?>
		</body>
</html>