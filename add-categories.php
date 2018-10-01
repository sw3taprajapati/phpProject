<?php
	include('classes/AddDeleteCategories.php');
	$categoryName=$_POST['category-name'];

	$obj=new AddDeleteCategories();
	$obj->addCategories($categoryName);
?>