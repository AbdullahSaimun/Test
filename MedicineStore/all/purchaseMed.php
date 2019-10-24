 <?php
 session_start();
if(!isset($_SESSION['cemail'])){
	header('location:customerLog.php');
} 
 include_once 'Crud.php';


   $crud = new Crud();
   $que="select *from medicine";
	$resu = $crud->getData($que);
?>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="tablecss.css">
<div class="form-style-6">
	<h1>Purchase Medicine by Customer</h1>
<form action="purchaseMed.php" method="POST">
	<div id="drname"></div>
	<!--<input type="text"  name="mediName" placeholder="Medicine Name"> &nbsp; -->
	<select name="mediName">
	<?php
	foreach ($resu as $re) {
		
		echo "<option value='$re[id]'>".$re['medName']."</option>";
		}
	?>
</select> 
	<input type="number" name="quantity" placeholder="quantity"> &nbsp;
	<input type="submit" name="submit" value="submit">
</form>
</div>
	

<?php
  
  
   
 
  if(isset($_POST['submit'])){
		$medId = $_POST['mediName'];
		
		$quantity = $_POST['quantity'];
		
		
		
		               $query = "Select * from medicine where id='$medId'"; 

                       $result = $crud->getData($query);
		
		if($result)
		{
			 foreach($result as $key=>$res)
			 {  

			 	$quan= $res['quantity'];
			 	if($quantity<$quan)
			 	{   $medName=$res['medName'];
			 		$id= $res['id'];
			 		$price= $res['unitPrice']; echo "<br>";
			 		$total=$quantity*$price;
			 echo "<div id=tableoutput>";		
          echo "<center>";
			 	echo "<table border=1>";

	echo "<tr>";
	echo	"<td> Medicine Name </td>";
		
		echo "<td> Unit Price </td>";
		echo "<td> Quantity </td>";
		echo "<td> Total Price </td>";
		
	 echo "</tr>";
	
	 
		 echo "<tr>";
		 echo "<td>".$medName."</td>";
		 
		 echo "<td>".$price."</td>";
		echo "<td>".$quantity."</td>";
		echo "<td>".$total."</td>";

		 
		 echo "</tr>"; 
	     
	 
        echo "</table>";
        echo "</center>";
        echo "</div>";
        $remainQuan=$quan-$quantity;
        $resultt = $crud->execute("Update medicine SET quantity='$remainQuan' where id=$id");
        if(!$resultt)
        {
        	echo "problem in update";
        }
			 	}
			 	else
			 	{  echo "<center>";
			 		echo "out of stock";
			 		echo "</center>";

			 	}
			 	
			 	

			 }

              $remainQuan=$quan-$quantity;



		}
		else
		{
			echo "this product not available";
		}
	}

?>
<div class="form-style-6">

<a href="logout.php"><input type="button" name="logout" value="Logout"></a>
</div>
<script>

</script>


   