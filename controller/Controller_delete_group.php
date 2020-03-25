<?php
include_once("model/Model_group.php");

class controller_delete_group {
    public $model;
    
    public function __construct()  
	{  
    	$this->model = new Model_group();
	}

    public function invoke()
    {
   	 if (isset($_REQUEST['delete_group']))
   	 {	
   		 $this->model->delete_group();
   	 }
    }
}
?>
