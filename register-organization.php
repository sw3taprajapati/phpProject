<?php 
include('includes/head.php');
include('includes/header.php');
include('includes/main.php');

?>

<div class="div-register-organization">
	<div class="container">
		<div class="div-form">
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
			}
			?>
			<h2>Register Organization</h2>
			<form action="insert-organization.php" method="POST">
				<div class="form-group">
					<!-- <label for="organization-name">Organization Name</label> -->
					<input type="text" name="organization-name" id="organization-name" placeholder="Organization Name" class="input-field">
				</div>

				<div class="form-group">
					<!-- <label for="email">Email</label> -->
					<input type="email" name="email" id="email" placeholder="Email" class="input-field">
				</div>

				<div class="form-group">
					<!-- <label for="username">Username</label> -->
					<input type="text" name="username" id="username" placeholder="Username" class="input-field">
				</div>

				<div class="form-group">
					<!-- <label for="password">Password</label> -->
					<input type="password" name="password" id="password" placeholder="Password" class="input-field">
				</div>

				<div class="form-group">
					<!-- <label for="confirm-password">Confirm Password</label> -->
					<input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" class="input-field">
				</div>

				<div class="form-group">
					<!-- <label for="street">Street</label> -->
					<input type="text" name="street" id="street" placeholder="Street" class="input-field">
				</div>
				<div class="form-group">
					<!-- <label for="district">District</label> -->
					<input type="text" name="district" id="district" placeholder="District" class="input-field">
				</div>
				<div class="form-group">
					<!-- <label for="zone">Zone</label> -->
					<input type="text" name="zone" id="zone" placeholder="Zone" class="input-field">
				</div>
				<div class="form-group">
					<!-- <label for="contact-number">Contact Number</label> -->
					<input type="text" name="contact-number" id="contact-number" placeholder="Contact Number" class="input-field">
				</div>
				<div class="form-group">
					<!-- <label for="website">Website</label> -->
					<input type="text" name="website" id="website" placeholder="Website" class="input-field">
				</div>
				<div class="form-group">
					<!-- <label for="pan-number">Pan Number</label> -->
					<input type="text" name="pan-number" id="pan-number" placeholder="Pan Number" class="input-field">
				</div>
				<div class="form-group">
					<input type="submit" value="Register" name="submit" class="button btn-blue">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include ('includes/footer.php'); ?>

