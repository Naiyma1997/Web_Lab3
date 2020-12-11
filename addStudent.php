<?php 
	include 'admin_header.php';
	require_once 'controllers/DepartmentController.php';
	$departments = getAllDepartments();
?>
<div class="center">
	<form class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" class="form-control" name = "name">
		</div>
		<div class="form-group">
			<h4 class="text">ID:</h4> 
			<select  class="form-control" name = "id">
				<?php
					foreach($departments as $department){
						echo "<option value = '".department['Id']."'>".$department["Name"]."</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<h4 class="text">DOB:</h4> 
			<input type="text" class="form-control" name = "dob">
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" name = "add_student" value="Add Student" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Credit:</h4> 
			<input type="text" class="form-control" name = "credit">
		</div>
		<div class="form-group">
			<h4 class="text">Cgpa:</h4> 
			<input type="text" class="form-control" name = "cgpa">
		</div>
		<div class="form-group">
			<h4 class="text">Department:</h4> 
			<select  class="form-control" name = "deptid">
				<option hidden>Choose</option>
				<?php
					foreach($departments as $department){
						echo "<option value = '".department['Id']."'>".$department["Name"]."</option>";
					}
				?>
			</select>
		</div>
	</form>
</div>

<?php include 'admin_footer.php';?>
