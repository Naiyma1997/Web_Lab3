<?php
	require_once 'db_connect.php';
	if(isset($_POST["add_students"])){
		insertDepartment($_POST["name"]);
		
	}
	if(isset($_POST["edit_students"])){
		updateDepartment($_POST["id"],$_POST["name"]);
	}
	function insertDepartment($name){
		$query = "INSERT INTO departments VALUES(NULL,'$name')";
		execute($query);
		header("Location: alldepartment.php");
	}
	function getAllDepartments(){
		$query = "SELECT * FROM departments";
		$departments = getArray($query);
		return $departments;
	}
	function getDepartment($id){
		$query="SELECT * FROM departments WHERE Id=$id";
		$department=getArray($query);
		return $department;
		
	}
	function updateDepartment($id,$name){
		$query="UPDATE departments SET Name='$name' WHERE Id= $id";
		execute($query);
		header("Location: alldepartments.php");
	}
	function deleteCategory($id){
		$query = "DELETE FROM `departments` WHERE Id = '$id'";
		execute($query);
		header("Location: alldepartments.php");
	}
?>