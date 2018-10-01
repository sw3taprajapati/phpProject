<?php
include ('classes/database.php'); 

Class Login{

	public $db;

	public function __construct(){
		$this->db=new DatabaseConnection();
	}

	public function searchUser($username,$password){

		$sql ="SELECT * FROM user where username LIKE '".$username."' and  password LIKE '".$password."';";

		$result=$this->db->queryFunction($sql);
		$count=0;
		$id;
		$userid;
		foreach ($result as $value) {
			$count++;
			$id=$value['role_id'];
		}

		if($count>0){
			$count=0;
			$roleName;
			$sql="SELECT role_name from role where role_id=".$id;
			$result=$this->db->queryFunction($sql);

			foreach ($result as $value) {
				$roleName=$value['role_name'];
				$count++;
			}

			if($count>0){

				$_SESSION['username']=$username;
				$_SESSION['role-id']=$id;

				if($roleName=="Admin"){
					
					header('Location:admin.php');

				}else if($roleName=="Receiver"){

					header('Location:organization-dashboard.php');

				}else if($roleName=="Donor"){

					header('Location:donor-dashboard.php');

				}else{
					$_SESSION['status']="Username or Password Incorrect";
					$_SESSION['class']="fail";
					header('Location:login-link.php');
				}
			}
		}else{
			$_SESSION['status']="Username or Password Incorrect";
			$_SESSION['class']="fail";
			header('Location:login-link.php');
		}

	}
}
?>