<?php 
	include 'admin_header.php';
	require_once 'controllers/DepartmentController.php';
	$c_id = $_REQUEST["id"];
	$department = getDepartmet($c_id);
?>
<!--edit category starts -->
<div class="center">
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $department["id"];?>">
			<input type="text" name="name" value="<?php echo $department["name"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_department" class="btn btn-success" value="Edit Department" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>