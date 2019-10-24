<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('location:login.php'); 
	}
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$id = $_GET['id'];
	
	$query = "select * from medicine where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
		$medName = $res['medName'];
		$medCompany = $res['medCompany'];
		$unitPrice = $res['unitPrice'];
		$quantity = $res['quantity'];
	}
?>
<link rel="stylesheet" type="text/css" href="home.css">
<div class="form-style-6">
	<h1>Update Stock</h1>
<form action="editaction.php" method="POST">
	<input type="text" name="id" hidden value="<?php echo $id;?>"/>
	<input type="text" name="medName" value="<?php echo $medName;?>"/>
	<input type="text" name="medCompany" value="<?php echo $medCompany;?>"/>
	<input type="number" name="unitPrice" value="<?php echo $unitPrice;?>"/>
	<input type="number" name="quantity" value="<?php echo $quantity;?>"/>

	<input type="submit" name="update" value="Update"/>
</form>
</div>