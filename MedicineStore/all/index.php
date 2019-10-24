<?php
 session_start();
if(!isset($_SESSION['email'])){
	header('location:adminLog.php'); 
} 
?>
<link rel="stylesheet" type="text/css" href="home.css">
<div class="form-style-6">
<form>
	
	 <center>
	<div id="form-add">
<!--	<a href="addMedicine.php"><input type="button" name="add" value="Add Product" id="view-stock"></a> &nbsp; &nbsp;&emsp; -->
	<a href="stock.php"><input type="button" name="stock" value="Stock and Add" id="stockshow"></a> <br>
	
	</div>

		

</center>



</form>
</div>