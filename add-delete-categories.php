<?php
include('classes/AddDeleteCategories.php');
include('includes/head.php');
include('includes/header.php');
include('includes/main.php');
?>
<section class="add-delete-categories">
	<div class="container">
		<div class="add-categories">
			<form action="add-categories.php" method="Post">
				<div class="form-group">
					<input type="text" name="category-name" id="category-name" class="input-field" placeholder="Add Categories" required="required">
					<input type="submit" value="Add" name="submit" class="button btn-blue">
				</div>
			</form>
		</div>
		<div class="delete-view-categories">
			<h2>List of Categories</h2>
			<table>
				<thead>
					<tr>
						<th>S.N</th>
						<th>Category Name</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$obj=new AddDeleteCategories();
					$data=$obj->viewCategories();
					
					$i=1;

					foreach ($data as$value) {
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['categories_list']; ?></td>
						</tr>
						<?php
						$i++;
					}
					?>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php include('includes/footer.php'); ?>