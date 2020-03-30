<?php

include_once("model/User.php");
include_once("view/retorno.php");

class Model_user {
    public function create_user($username, $groupname, $folder, $passw, $department)
    {
   	 $usuario=new User($username, $groupname, $folder, $passw, $department);
   	 passthru('sudo ./crear_usuarios.sh '.$usuario->username.' '.$usuario->passw.' '.$usuario->department.' '.$usuario->folder.' '.$usuario->groupname , $retorno);
    }
    public function list_users()
    {	 
	 $salida = shell_exec('sudo ./listar_usuarios.sh');
	 $contador=0;
	 $usuarios = explode("\n", $salida);
	 include 'view/list_users.php';
    }
    public function delete_user()
    {
   	 passthru("sudo ./eliminar_usuarios.sh ".$_REQUEST['delete_user'], $retorno);
	 unset($_REQUEST['delete_user']);
	 header('Location: index.php');
    }
    public function upload_users($csv)
    {
	 $fechaActual = date('YmdHis');
	 $target_file = "uploads/carga_usuarios-" . $fechaActual . ".csv";
	 move_uploaded_file($csv, $target_file);
	 $linea = 0;
	 $usuarios = array();
	 $archivo = fopen($target_file, "r");
	 while (($datos = fgetcsv($archivo, ";")) == true){
  	 	$num = count($datos);
 		$linea++;
  		for ($columna = 0; $columna < $num; $columna++){
			if($linea>1){
				$campo = explode(";", $datos[$columna]);
				array_push($usuarios, $campo);
			}
     		}
	 }
	 fclose($archivo);
	 return $usuarios;
    }
}

?>
