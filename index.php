<?php
@session_start();
if(isset($_SESSION['role-id'])){
	if($_SESSION['role-id']==1){
		include('admin.php');
	}else if($_SESSION['role-id']==3){
		include('organization-dashboard.php');
	}else if($_SESSION['role-id']==2){
		include('donor-dashboard.php');
	}
}else{
	include('includes/head.php');
	include('includes/header.php');
	include('includes/main.php');
	include('includes/banner.php');
	include ('includes/section-categories.php');
	include('includes/footer.php');
}

?>