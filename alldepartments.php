<?php 
	include 'admin_header.php';
	require_once 'controllers/DepartmentController.php';
	$departments= getAllDepartments();
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Department</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($departments as $department){
					echo "<tr>";
					echo "<td>".$departments["Name"]."</td>";
					echo "<td></td>";
					echo '<td><a href="editcategory.php?id='.$departments["Id"].'" class="btn btn-success">Edit</a></td>';
					echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
				}
			?>
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>