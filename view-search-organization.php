<?php 
include('classes/OrganizationViewSearch.php');
include('includes/head.php');
include('includes/header.php');
include('includes/main.php');
?>
<section class="search-view-organization">
	<div class="container">
		<div class="search-div">
			<form action="" method="GET">
				<input type="text" name="search-text" id="search-text" placeholder="Search Here" class="input-field">
				<input type="submit" name="submit" value="Search" class="button btn-blue">
			</form>
		</div>
		
		<h2>Our Registered Organization</h2>

		<div class="three-column">
			<?php 

			$obj=new OrganizationViewSearch();

			if(isset($_GET['submit'])){
				$searchText=$_GET['search-text'];
				$data=$obj->searchOrg($searchText);
			}else{
				$data=$obj->getData();
			}
			foreach ($data as $value) {
				?>
				<div class="view-organization">
					<h2><?php echo $value['organization_name'] ?></h2>
					<p><i class="fa fa-location-arrow"></i> <?php echo $value['street'].", ".$value['district'].", ".$value['zone'] ?></p>
					<p><i class="fa fa-phone"></i> <?php echo $value['contact_number'] ?></p>
					<p><a href="<?php echo 'http://'.$value['website'] ?>" class="button btn-sky">Website</a>
						<?php 
						if($value['item_description']!='Not Set'){
							?>
							<a href="#" class="button btn-green">Intrested</a></p>
							<?php
						} ?>
					</div>
					<?php
				}
				?>
			</div>
			
			
		</div>
	</section>
	<?php include ('includes/footer.php');

	if(isset($_POST['submit'])){
		$searchText=$_POST['search-text'];

		$obj=new OrganizationViewSearch();
		$obj->searchOrganization($searchText);
	}
	?>