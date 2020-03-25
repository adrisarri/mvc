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
}

?>
