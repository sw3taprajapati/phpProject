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
				<a href="donors-list.php"><img src="images/edit.png" alt="add/delete"></a>
			</div>
			<div class="section-categories">
				<a href="donors-list.php"><p>View Donation Request</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href="edit-profile.php"><img src="images/add.png" alt=""></a>
			</div>
			<div class="section-categories">
				<a href="edit-profile.php"><p>Edit Profile</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href="view-organization-donors.php"><img src="images/info.png" alt=""></a>
			</div>
			<div class="section-categories">
				<a href="view-organization-donors.php"><p>View Donors</p></a>
			</div>
		</div>
	</div>
</section>
<?php
include('includes/footer.php'); 
?>