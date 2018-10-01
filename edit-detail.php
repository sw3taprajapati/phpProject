<?php
include('includes/head.php');
include('includes/header.php');
include('includes/main.php');
include('classes/EditDetail.php'); 
?>
<section class="edit-detail">
	<div class="container">
		<div class="div-form">
			<h2>Edit Profile</h2>
			<?php
			if(isset($_SESSION['status'])){
				if($_SESSION['class']=='success'){
					$icon='fa fa-check';
				}else{
					$icon='fa fa-times'; 
				}
				?>
				<div class="<?php echo $_SESSION['class'] ?>" id="<?php echo $_SESSION['class'] ?>"><i class="<?php echo $icon ?>"></i><?php echo $_SESSION['status']; ?></div>
				<?php

				unset($_SESSION['status']);
			}

			$obj=new EditDetail();
			$data=$obj->getData($_SESSION['username']);
			?>

			<?php 
			foreach ($data as $value) {
				?>

				<form action="" method="POST">
					<div class="form-group">
						<!-- <label for="organization-name">Organization Name</label> -->
						<input type="text" name="organization-name" id="organization-name" placeholder="Organization Name" class="input-field" value="<?php echo $value['organization_name'] ?>" readonly="readonly">
					</div>

					<div class="form-group">
						<!-- <label for="email">Email</label> -->
						<input type="email" name="email" id="email" placeholder="Email" class="input-field" value="<?php echo $value['email'] ?>">
					</div>

					<div class="form-group">
						<!-- <label for="username">Username</label> -->
						<input type="text" name="username" id="username" placeholder="Username" class="input-field" value="<?php echo $_SESSION['username'] ?>" readonly="readonly">
					</div>

					<div class="form-group">
						<!-- <label for="street">Street</label> -->
						<input type="text" name="street" id="street" placeholder="Street" class="input-field" value="<?php echo $value['street'] ?>">
					</div>
					<div class="form-group">
						<!-- <label for="district">District</label> -->
						<input type="text" name="district" id="district" placeholder="District" class="input-field" value="<?php echo $value['district'] ?>">
					</div>
					<div class="form-group">
						<!-- <label for="zone">Zone</label> -->
						<input type="text" name="zone" id="zone" placeholder="Zone" class="input-field" value="<?php echo $value['zone'] ?>">
					</div>
					<div class="form-group">
						<!-- <label for="contact-number">Contact Number</label> -->
						<input type="text" name="contact-number" id="contact-number" placeholder="Contact Number" class="input-field" value="<?php echo $value['contact_number'] ?>">
					</div>
					<div class="form-group">
						<!-- <label for="website">Website</label> -->
						<input type="text" name="website" id="website" placeholder="Website" class="input-field" readonly="readonly" value="<?php echo $value['website'] ?>"> 
					</div>
					<div class="form-group"> 
						<input type="text" name="pan-number" id="pan-number" placeholder="Pan Number" class="input-field" readonly="readonly" value="<?php echo $value['pan_number'] ?>">
					</div>

					<div class="form-group">
						<input type="submit" value="Update" name="submit" class="button btn-blue">
					</div>
				</form>
				<?php
			}
			?>
		</div>
	</div>
</section>
<?php

if(isset ($_POST['submit'])){

	$email=$_POST['email'];
	$username=$_POST['username'];
	$street=$_POST['street'];
	$district=$_POST['district'];
	$zone=$_POST['zone'];
	$contactNumber=$_POST['contact-number'];

	$obj->updateData($email,$username,$street,$district,$zone,$contactNumber);

}
include('includes/footer.php'); 
?>