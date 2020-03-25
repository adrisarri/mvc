<?php
include_once("model/Model_user.php");

class controller_list_user {
    public $model;
    
    public function __construct()  
	{  
    	$this->model = new Model_user();
	}

    public function invoke()
    {
		 if(isset($_REQUEST['delete_user'])){
			$this->model->delete_user();
			$this->model->list_users();
		 }else{
			$this->model->list_users();
		 }
    }
}
?>
