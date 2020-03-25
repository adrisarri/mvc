<?php
include_once("model/Model_group.php");

class controller_list_group {
    public $model;
    
    public function __construct()  
	{  
    	$this->model = new Model_group();
	}

    public function invoke()
    {		 
		 if(isset($_REQUEST['delete_group'])){
			$this->model->delete_group();
			$this->model->list_group();
		 }
		 if(isset($_REQUEST['list_usergroup'])){
			$this->model->list_usergroup();
		 }
		 if(!isset($_REQUEST['list_usergroup']) && !isset($_REQUEST['delete_group'])){
			$this->model->list_group();
		 }
    }
}
?>
