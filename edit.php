<?php

include('classes/ApproveDeclineOrganization.php');

$id=$_GET['id'];

$obj=new ApproveDeclineOrganization();
$obj->approveOrganization($id);
?>