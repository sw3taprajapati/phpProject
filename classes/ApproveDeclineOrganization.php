<?php
include('classes/database.php');

class ApproveDeclineOrganization extends DatabaseConnection{

	public $db;
	public $sql;

	public function __construct(){

		$this->db=new DatabaseConnection();
	}

	public function selectOrganizationList(){

		$this->sql="SELECT * FROM organization where status=0";

		$list=$this->db->queryFunction($this->sql);
		return $list;
	}

	public function deleteOrganization($id){

		$this->sql="DELETE FROM organization where organization_id=".$id;

		$query=$this->db->queryFunction($this->sql);

		if($query>0){
			$_SESSION['status']="Decline sucessfully";
			$_SESSION['class']="fail";
			header('Location:organization-list.php');
		}else{
			$_SESSION['status']="Decline not successful";
			$_SESSION['class']="fail";
			header('Location:organization-list.php');
		}
	}

	public function approveOrganization($id){
		
		$this->sql="UPDATE organization SET status=1 where organization_id=".$id;

		$query=$this->db->queryFunction($this->sql);

		if($query>0){
			$_SESSION['status'] = "Aprroval successful";
			$_SESSION['class']="success";
			header('Location:organization-list.php');

		}else{
			$_SESSION['status'] = "Approval not successful";
			$_SESSION['class']="fail";
			header('Location:organization-list.php');
		}
	}
} 
?>