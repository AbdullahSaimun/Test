
<!-- <form>
<select name="productType">
	<option value="select">select</option>
	<option value="device">Add Medical Device</option>
	<option value="book">Add Medical Book</option>
</select>
<input type="submit" name="productSub" value="Submit" value="productSub"> <br>
</form>
<?php
//   if(isset($_POST['productSub'])){
  //    $hel=$_POST['productType'];
  //    echo $hel;
 //  }
?> -->



<?php
	session_start();
if(!isset($_SESSION['email'])){
	header('location:adminLog.php');
}
?>
<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$medName = $_POST['na'];
		$medCompany = ($_POST['co']);
		$unitPrice = $_POST['pr'];
		$quantity = $_POST['qu'];
		if(!$medName)
		{
			echo "Can not take";
		}
		else
		{

		               $result = $crud->execute("INSERT into medicine(medName,medCompany,unitPrice,quantity) VALUES('$medName','$medCompany','$unitPrice','$quantity')");
		               if($result){
			                echo "success";
		                 }else{
			                echo "problem";
		                         }

		}
		
		
		
		
	
	
	
?>