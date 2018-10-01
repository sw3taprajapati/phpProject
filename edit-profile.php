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
				<a href="add-delete-update.php"><img src="images/edit.png" alt="add/delete"></a>
			</div>
			<div class="section-categories">
				<a href="add-delete-update.php"><p>Add/Delete/Update Requirements</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href="edit-detail.php"><img src="images/edit-detail.png" alt=""></a>
			</div>
			<div class="section-categories">
				<a href="edit-detail.php"><p>Edit Details</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href="add-delete-categories.php"><img src="images/info.png" alt=""></a>
			</div>
			<div class="section-categories">
				<a href="add-delete-categories.php"><p>Change Password</p></a>
			</div>
		</div>
	</div>
</section>
<?php
include('includes/footer.php'); 
?>