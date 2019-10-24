<?php
 include_once 'Crud.php';
	
	$crud = new Crud();
	$query="select *from medicine";
	$result = $crud->getData($query);
	
	
?>
<select>
	<?php
	foreach ($result as $res) {
		
		echo "<option value='$res[id]'>".$res['medName']."</option>";
		}
	?>
</select>