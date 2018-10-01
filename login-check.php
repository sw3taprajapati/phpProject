<?php

include('classes/Login.php');

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$obj=new Login();
	$obj->searchUser($username,$password); 	
}

?>