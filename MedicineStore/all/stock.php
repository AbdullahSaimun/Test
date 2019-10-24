
<?php
 session_start();
if(!isset($_SESSION['email'])){
	header('location:adminLog.php'); 
    }
?>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="tablecss.css">
<div> 
<div class="form-style-6">
	<h1>Medicine Stock</h1>
<form id="form-add">
	<input type="text" name="medName" placeholder="Name" id="medName" /> </br>
	<input type="text" name="medCompany" placeholder="Company" id="medCompany" /> </br>
	<input type="number" name="unitPrice" placeholder="unit price" id="unitPrice" /> </br>
	<input type="number" name="quantity" placeholder="Quantity" id="quantity" /> </br>
    <input type="button" id="cancel" onclick="$('#form-add').slideUp();" name="cancel" value="Cancel"/>
	<input type="button" name="add" value="submit" id="add" />
	<input type="reset" name="reset" value="Reset">
	<link rel="stylesheet" type="text/css" href="log.css">
</form>
</div>
</div>
        <div id="data-view"></div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>

		<script>
			$(document).ready(function(){
				$('#add').click(function(){
					
                  var medName = $('#medName').val();
				var medCompany = $('#medCompany').val();
				var unitPrice = $('#unitPrice').val();
				var quantity = $('#quantity').val();
				
				$.ajax({
                 url:"addMedicine.php",
					type:"POST",
					data: {na:medName,co:medCompany,pr:unitPrice,qu:quantity},
					success: function(data)
					{
						
							$('#medName').val('');
							$('#medCompany').val('');
							$('#unitPrice').val('');
							$('#quantity').val('');
							$.get('view.php',function(data){
		
									$('#data-view').html(data);
								})
						
					}

				})
				
				})
			})
		</script>

 <?php
/*include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from medicine order by id DESC";

$result = $crud->getData($query); */

?>
<a href="addMedicine.php">Add New Data</a> <br>
<div class="form-style-6">
<input type="submit" id="add-show" name="add" value="Add Data">
</div>
<!--<center> Welcome <?php echo $_SESSION['name'];?>

</center> -->
<a href="logOut.php">Log Out</a>
<!--<div class="form-style-6">
<input type="button" name="talsh" id="tbsh" value="Table Show">
<input type="button" name="talshs" id="tbh" value="Table Hide">
</div> -->
<!--<center>
	<div id="tableshow">
<table border="1">

	<tr>
		<td> Medicine Name </td>
		<td> Medicine Company </td>
		<td> Unit Price </td>
		<td> Quantity </td>
		<td> Action </td>
	</tr>
	<?php
/*	 foreach($result as $key=>$res){
		 echo "<tr>";
		 echo "<td>".$res['medName']."</td>";
		 echo "<td>".$res['medCompany']."</td>";
		 echo "<td>".$res['unitPrice']."</td>";
		 echo "<td>".$res['quantity']."</td>";
		 echo "<td><a href='edit.php?id=$res[id]'>Edit</a> | 
		 <a href='delete.php?id=$res[id]'>Delete</a></td>";
		 echo "</tr>"; */
	// }
	 ?>
</table>
</div> -->
</center>
<script type="text/javascript">
$(document).ready(function(){
	$('#add-show').click(function(){
		$('#form-add').slideDown();
	})
})
</script>
<!--<script type="text/javascript">
$(document).ready(function(){
	$('#tbsh').click(function(){
		$('#tableshow').slideDown();
	})
})
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('#tbh').click(function(){
		$('#tableshow').slideUp();
	})
})
</script> -->