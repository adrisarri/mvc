<?php
include_once("model/Model_user.php");

class controller_upload_users {
    public $model;
    
    public function __construct()  
	{  
    	$this->model = new Model_user();
	}

    public function invoke()
    {
   	 if (!isset($_FILES['file']))
   	 {	
   		 // web por defecto
   		 include 'view/Form_upload_users.php';
   	 }
   	 else
   	 {	

   		 $prueba=$this->model->upload_users($_FILES["file"]["tmp_name"]);
		 //print_r($prueba);
		 $num=count($prueba);
		 for($i=0;$i<$num;$i++){
		 	//print($prueba[$i][0]);
   		 	$this->model->create_user($prueba[$i][0],$prueba[$i][4],$prueba[$i][3],$prueba[$i][1],$prueba[$i][2]);
			print("hola");
		 }
   		 include 'view/Form_upload_users.php';
   	 }
    }
}
?>
