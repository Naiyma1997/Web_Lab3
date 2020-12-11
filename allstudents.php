<?php 
	include 'admin_header.php';
	require_once 'controllers/StudentsController.php';
	$Students = getAllStudents();
?>

<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th> Name</th>
			<th> ID</th>
			<th>DOB</th>
			<th>Credit</th>
			<th>Cgpa</th>
			<th>Dept_id</th>
			<th></th>
			<th></th>
			
		</thead>
			<?php
				$i = 1;
				foreach($Students as $student){
					echo "<tbody>";
					echo "<td>".$i."</td>";
					echo "<td>".$student["name"]."</td>";
					echo "<td>".$student["deptName"]."</td>";
					echo "<td>".$student["cgpa"]."</td>";
					echo "<td>".$student["dob"]."</td>";
					echo "<td>".$student["credit"]."</td>";
					echo '<td><a href="editstudent.php?id='.$student["d_id"].'" class="btn btn-success">Edit</a></td>';
					echo "<td><a href = 'StudentsController' class='btn btn-danger'>"."Delete"."</td>";
					echo "</tbody>";
					$i++;
				}
			?>
	</table>
</div>

<?php include 'admin_footer.php';?>