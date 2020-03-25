<?php
include_once("model/Model_user.php");

class controller_delete_user {
    public $model;
    
    public function __construct()  
	{  
    	$this->model = new Model_user();
	}

    public function invoke()
    {
   	 if (isset($_REQUEST['delete']))
   	 {	
   		 $this->model->delete_user();
   	 }
    }
}
?>
