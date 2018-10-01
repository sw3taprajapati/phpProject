<?php 
include('classes/database.php');

class ViewDonors extends DatabaseConnection{
	public $db;

	public function __construct(){
		$this->db=new DatabaseConnection();
	}

	public function viewDonors(){
		$query="Select * from Donor where status=1";

		$result=$this->db->queryFunction($query);

		return $result;
	}
}
?>