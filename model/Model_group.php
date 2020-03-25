<?php

include_once("model/Group.php");
include_once("view/retorno.php");

class Model_group {
    public function create_group($group)
    {
   	 $group=new Group($group);
   	 passthru('sudo ./crear_grupos.sh '.$group->group, $retorno);
   	 echo "retorno de passthru add_group: ".$retorno;   	 
   	 return;
    }
    public function list_usergroup()
    {	 
	 $salida = shell_exec('sudo ./listar_usuariosdegrupo.sh '.$_REQUEST['list_usergroup']);
	 $grupo=$_REQUEST['list_usergroup'];
	 $contador=0;
	 $grupos = explode("\n", $salida);
	 include 'view/list_usergroup.php';
	
    }
    public function delete_group()
    {
   	 passthru("sudo ./eliminar_grupos.sh ".$_REQUEST['delete_group'], $devuelto);
	 unset($_REQUEST['delete_group']);
	 header("Location: index.php");
    }
    public function list_group()
    {
	 $salida = shell_exec('sudo ./listar_grupos.sh');
	 $contador=0;
	 $grupos = explode("\n", $salida);
	 include 'view/list_groups.php';
    }
}

?>
