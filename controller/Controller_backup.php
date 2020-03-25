<?php
class Controller {
    function invoke() {    
        include_once("view/main_page.php");
	if (isset($_REQUEST['option'])){
		switch ($_REQUEST['option']) {
		    case $_REQUEST['option']=="create_user":
			include_once("view/Form_create_user.php");
			if (isset($_REQUEST['user'])&&isset($_REQUEST['password'])&&isset($_REQUEST['surname'])&&isset($_REQUEST['home_directory'])&&isset($_REQUEST['group_directory'])){
				include_once("controller/Controller_create_user.php");	
			}
			break;
		    case $_REQUEST['option']=="list_user":
			echo "Listar usuarios";
			break;
		    case $_REQUEST['option']=="create_group":
			echo "Crear grupo";
			break;
		    case $_REQUEST['option']=="list_groups":
			echo "Listar grupos";
			break;
		}
	}
    }
}

?>