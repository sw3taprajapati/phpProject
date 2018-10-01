<?php 

include ('classes/database.php');

class OrganizationViewSearch extends DatabaseConnection{

	public $db;

	public function __construct(){
		$this->db=new DatabaseConnection();
	}

	public function getData(){

		$sql="SELECT organization_name,street,zone,district,contact_number,item_description,website from organization where status=1";

		$data=$this->db->queryFunction($sql);
		return $data;
	}

	public function searchOrg($searchText){

		$sql="SELECT organization_name,street,zone,district,contact_number,item_description,website from organization where (organization_name like '%".$searchText."%' or street like '%".$searchText."%' or district like '%".$searchText."%' or zone like '%".$searchText."%' or website like '%".$searchText."%') and status=1";

		$data=$this->db->queryFunction($sql);
		return $data;
	}
}
?>