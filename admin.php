<?php 
include('includes/head.php');
include('includes/header.php');
include('includes/main.php');

?>
<section class="admin-menu">
	<div class="container">

		<h2>Menu</h2>
		<div class="menu-div">
			<div class="section-image">
				<a href="organization-list.php"><img src="images/edit.png" alt="add/delete"><a href=""></a></a>
			</div>
			<div class="section-categories">
				<a href="organization-list.php"><p>Organization List</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href=""><img src="images/info.png" alt=""><a href=""></a></a>
			</div>
			<div class="section-categories">
				<a href=""><p>View Information</p></a>
			</div>
		</div>

		<div class="menu-div">
			<div class="section-image">
				<a href="add-delete-categories.php"><img src="images/add.png" alt=""><a href=""></a></a>
			</div>
			<div class="section-categories">
				<a href="add-delete-categories.php"><p>Add/Delete Categories</p></a>
			</div>
		</div>
	</div>
</section>
<?php
include('includes/footer.php');
?>