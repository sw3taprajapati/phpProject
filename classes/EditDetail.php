<?php
include('classes/database.php');

class EditDetail extends DatabaseConnection{

	public $db;
	public $sql;
	

	public function __construct(){

		$this->db=new DatabaseConnection();
	}

	public function getData($username){

		$count=0;
		$userId;
		$roleId;

		$this->sql="SELECT * FROM user where username LIKE '".$username."'";
		
		$list=$this->db->queryFunction($this->sql);

		foreach($list as $value) {

			$userId=$value['user_id'];
			$roleId=$value['role_id'];
			$count=1;
		}
		if($count==1){

			if($roleId==3){

				$this->sql="SELECT * FROM Organization where user_id=".$userId;

				$list=$this->db->queryFunction($this->sql);

				return $list;
			}else if($roleId==2){

				$this->sql="SELECT * FROM Donor where user_id=".$userId;

				$list=$this->db->queryFunction($this->sql);
				return $list;
			}
			
		}
	}

	public function updateData($email,$username,$street,$district,$zone,$contactNumber){
		$this->sql="Update Organization SET email ='".$email."' , street= '".$street."' , district='".$district."' , zone= '".$zone."' , contact_number= ".$contactNumber." where user_id= (Select user_id from user where username LIKE '".$username."')";

		$query=$this->db->queryFunction($this->sql);

		if($query>0){
				$_SESSION['status']="Update successfully";
				$_SESSION['class']="success";
				header('Location:edit-detail.php');
			}else{
				$_SESSION['status']="Something went wrong!!Try again later";
				$_SESSION['class']="fail";
				header('Location:edit-detail.php');
			}

	}
} 
?>