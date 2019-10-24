<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:adminLog.php'); 
	}
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$medName = $_POST['medName'];
		$medCompany = ($_POST['medCompany']);
		$unitPrice = $_POST['unitPrice'];
		$quantity = $_POST['quantity'];
		
		           $result = $crud->execute("Update medicine SET medName='$medName',medCompany='$medCompany',unitPrice='$unitPrice',quantity='$quantity' where id=$id");
		
		if($result){
			header("Location:stock.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>