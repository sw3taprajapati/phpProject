<?php
include('includes/head.php');
include('includes/header.php');
include('includes/main.php'); 
?>
<section class="organization-menu">
	<div class="container">
		<h2>Menu</h2>
		<div class="menu-div">
			<div class="section-image">
				<a href="add-requirements.php"><img src="images/add-requirement.png" alt="add/delete"></a>
			</div>
			<div class="section-categories">
				<a href="add-requirements.php"><p>Add Requirements</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href="edit-requirements.php"><img src="images/edit-requirement.png" alt=""></a>
			</div>
			<div class="section-categories">
				<a href="edit-requirements.php"><p>Edit Requirements</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href="delete-requirements.php"><img src="images/delete-requirement.png" alt=""></a>
			</div>
			<div class="section-categories">
				<a href="delete-requirements.php"><p>Delete Requirement</p></a>
			</div>
		</div>
	</div>
</section>
<?php
include('includes/footer.php'); 
?>