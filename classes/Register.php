<?php 
include('classes/database.php');
Class Register extends DatabaseConnection{

	public $db;

	public function __construct(){
		$this->db=new DatabaseConnection();
	}

	public function insert($organizationName,$email,$username,$password,$street,$district,$zone,$contactNumber,$website,$panNumber){

		$description="Not Set";
		$status=0;
		$verify="Not Set";
		$role_name="Receiver";
		$id;
		$sql="Insert into user (username,password,role_id) VALUES ('".$username."', '".$password."',(SELECT role_id from Role where role_name LIKE '".$role_name."'));";

		$query=$this->db->queryFunction($sql);

		if($query>0){
			$sql="SELECT user_id FROM user where username='".$username."' and password='".$password."';";
			$result=$this->db->queryFunction($sql);

			foreach ($result as $value) {
				$id=$value['user_id'];			
			}

			$sql="INSERT INTO organization(organization_name,email,street,district,zone,contact_number,website,pan_number,item_description,status,verification_code,user_id) VALUES( '".$organizationName."', '".$email."', '".$street."', '".$district."', '".$zone."', ".$contactNumber.", '".$website."', '".$panNumber."' , '".$description."', ".$status.", '".$verify."',".$id.");";

			$query=$this->db->queryFunction($sql);

			if($query>0){
				$_SESSION['status']="Registered successfully";
				$_SESSION['class']="success";
				header('Location:register-organization.php');
			}else{
				$_SESSION['status']="Something went wrong!!Can't insert";
				$_SESSION['class']="fail";
				header('Location:register-organization.php');
			}
		}else{
			$_SESSION['status']="Something went wrong!!Can't insert";
			$_SESSION['class']="fail";
			header('Location:register-organization.php');
		}
	}
}
?>