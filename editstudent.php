<?php 
	include 'admin_header.php';
	require_once 'controllers/StudentsController.php';
	$student = getStudent($_REQUEST["id"]);;
?>
<div class="center">
	<form class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" class="form-control" name = "name" value = <?php echo $student["Name"];?>>
		</div>
		<div class="form-group">
			<h4 class="text">Department:</h4> 
			<select  class="form-control" name = "deptid" value = <?php echo $student["Dept_Id"];?>>
				<option hidden>Choose</option>
				<?php
					foreach($departments as $department){
						echo "<option >".$department["Name"]."</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<h4 class="text">Credit:</h4> 
			<input type="text" class="form-control" name = "credit" value = <?php echo $student["Credit"];?>>
		</div>
		<div class="form-group">
			<h4 class="text">Cgpa:</h4> 
			<input type="text" class="form-control" name = "cgpa" value = <?php echo $student["CGPA"];?>>
		</div>
		<div class="form-group">
			<h4 class="text">DOB:</h4> 
			<input type="text" class="form-control" name = "dob" value = <?php echo $student["DOB"];?>>
		</div>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-success" name = "edit_student" value="Edit Student" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>