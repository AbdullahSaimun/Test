
 
<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:adminLog.php'); 
} 

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"medicine")){
		header("location:stock.php");
	}


?>