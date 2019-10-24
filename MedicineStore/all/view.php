<?php
 session_start();
if(!isset($_SESSION['email'])){
	header('location:adminLog.php'); 
}
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from medicine order by id DESC";

$result = $crud->getData($query);

?>
<link rel="stylesheet" type="text/css" href="tablecss.css">
<center>
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
	 foreach($result as $key=>$res){
		 echo "<tr>";
		 echo "<td>".$res['medName']."</td>";
		 echo "<td>".$res['medCompany']."</td>";
		 echo "<td>".$res['unitPrice']."</td>";
		 echo "<td>".$res['quantity']."</td>";
		 echo "<td><a href='edit.php?id=$res[id]'>Edit</a> | 
		 <a href='delete.php?id=$res[id]'>Delete</a></td>";
		 echo "</tr>";
	 }
	 ?>
</table>
</div>
</center>
</script>

</script>
<div class="form-style-6">
<input type="button" name="talsh" id="tbsh" value="Table Show">
<input type="button" name="talshs" id="tbh" value="Table Hide">
</div>
<script type="text/javascript">
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
</script>