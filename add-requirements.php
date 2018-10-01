<?php
include('includes/head.php');
include('includes/header.php');
include('includes/main.php');
include('classes/EditRequirement.php');

$obj=new EditRequirement();
$data=$obj->getCategoriesList(); 
?>
<section class="add-requirements">
	<div class="container">
		<div class="div-form">
			<h2>Add Your Requirements</h2>
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
			unset($_SESSION['status']);
			?>
			<form action="" method="POST">
				<?php 

				foreach ($data as $value) {
					?>
					<input type="checkbox" name="checkBox[]" id="<?php echo $value['categories_list'] ?>" value="<?php echo $value['categories_id'] ?>"><?php echo $value['categories_list'] ?>
					<?php
				}
				?>
				<div class="form-group">
					<textarea name="description" id="description" name="description" cols="30" rows="5" required="required"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Add Categories" class=" button btn-blue">
				</div>
			</form>
		</div>

		<div class="requirements-details">
			<?php $obj->getRequirementDetails(); ?>
			
			<table>
				<thead>
					<tr>
						<th>S.N</th>
						<th>Categories list</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</section>
<?php

if(isset($_POST['submit'])){
	$obj->addRequirements($_POST['checkBox'],$_POST['description']);
}
include('includes/footer.php'); 
?>