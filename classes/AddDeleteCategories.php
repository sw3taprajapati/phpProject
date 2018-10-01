<?php 
include('classes/database.php');
class AddDeleteCategories extends DatabaseConnection{
	public $db;

	public function __construct(){
		$this->db=new DatabaseConnection();
	}

	public function addCategories($categories){

		$sql="Select * from categories where categories_list LIKE '".$categories."'";

		$result=$this->db->queryFunction($sql);
		$count=0;

		foreach ($result as $value) {
			$count++;
		}
		
		if($count>0){
			header('Location:add-delete-categories.php?status=Already in list!!!!Try another');
		}else{
			$sql="INSERT INTO Categories (categories_list) VALUES ('".$categories."');";

			$result=$this->db->queryFunction($sql);

			if($result>0){
				header('Location:add-delete-categories.php?status=Sucessfully added Category');
			}else{
				header('Location:add-delete-categories.php?status=Something went wrong!!Try again');
			}
		}
	}

	public function viewCategories(){

		$sql="SELECT * FROM Categories";

		$result=$this->db->queryFunction($sql);

		return $result;
	}
}
?>