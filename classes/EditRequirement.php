<?php
include('classes/database.php');

class EditRequirement extends DatabaseConnection{

	public $db;
	public $sql;

	public function __construct(){

		$this->db=new DatabaseConnection();
	}

	public function getCategoriesList(){

		$this->sql="SELECT * FROM Categories";
		
		$list=$this->db->queryFunction($this->sql);

		return $list;
	}

	public function getRequirementDetails(){
		$this->sql="Select categories.categories_list from categories inner join organizationcategories on categories.categories_id= organizationcategories.categories_id inner join organization on Organization.organization_id=organizationcategories.organization_id where organization.user_id = (SELECT user_id from user where username LIKE '".$_SESSION['username']."')";

		var_dump($this->sql);
		die;
	}

	public function addRequirements($categories, $description){

		$roleId;
		$result;

		$this->sql="Select role_id from user where username LIKE '".$_SESSION['username']."'";

		$result=$this->db->queryFunction($this->sql);

		foreach ($result as$value) {
			$roleId=$value['role_id'];
		}
		
		if($roleId==2){

		}else if($roleId==3){

			$this->sql="UPDATE Organization SET item_description ='".$description."' where user_id= (SELECT user_id from user where username LIKE '".$_SESSION['username']."')";
			$result=$this->db->queryFunction($this->sql);

			if($result>0){
				foreach ($categories as $value) {
					$this->sql="INSERT INTO organizationcategories (organization_id,categories_id) VALUES ((SELECT user_id from user where username LIKE '".$_SESSION['username']."') ,".$value.")";
					$result=$this->db->queryFunction($this->sql);
				}

				if($result>0){
					$_SESSION['status']="Requirement Added Sucessfullys";
					$_SESSION['class']="success";
					header('Location:add-requirements.php');
				}else{
					$_SESSION['status']="Something went wrong!!Can't insert";
					$_SESSION['class']="fail";
					header('Location:add-requirements.php');
				}
			}else{
				$_SESSION['status']="Something went wrong!!Can't insert";
				$_SESSION['class']="fail";
				header('Location:add-requirements.php');
			}
		}
	} 
} 
?>