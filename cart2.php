<form method="post" action="function/place_order.php" class="well" style="background-color:#fff;">
		<table class="table">
		<label style="font-size:25px;">My Cart</label>
		<tr>
			<th><h3>Image</h3></td>
			<th><h3>Product Name</h3></th>
			<th><h3>Quantity</h3></th>
			<th><h3>Price</h3></th>
			<th><h3>Add</h3></th>
			<th><h3>Remove</h3></th>
			<th><h3>Subtotal</h3></th>
		</tr>

		<?php

		$id = isset($_GET['ID']) ? $_GET['ID'] : 1;
		$action = isset($_GET['action']) ? $_GET['action'] : 'empty';

		switch ($action) {
			case 'view':
				$_SESSION['cart'][$id];
				break;
			case 'add':
				$_SESSION['cart'][$id] = isset($_SESSION['cart'][$id]) ? $_SESSION['cart'][$id] + 1 : 1;
				
				break;
			case 'add_':
				// $query = "SELECT qty FROM stock WHERE product_id = '$id'";
				// $result = mysqli_query($conn, $query);
			
				// if ($result && mysqli_num_rows($result) > 0) {
				// 	$row = mysqli_fetch_assoc($result);
				// 	$quantity_available = $row['qty'];
				
				// 	if (isset($_SESSION['cart'][$id])) {
				// 		$qty = $_SESSION['cart'][$id] + 1;
				// 	} else {
				// 		$qty = 1;
				// 	}
				
				// 	// Check if the quantity added to the cart exceeds the quantity available in the database
				// 	if ($qty > $quantity_available) {
				// 		echo "<script>alert('The quantity you added exceeds the quantity available in our stores.');</script>";
				// 		// You can also redirect the user to the product page or perform any other action here
				// 	} else {
				// 		$_SESSION['cart'][$id] = $qty;
				// 	}
				// }
				break;
				
				
			case 'remove':
				if (isset($_SESSION['cart'][$id])) {
					$_SESSION['cart'][$id]--;
					if ($_SESSION['cart'][$id] == 0) {
						unset($_SESSION['cart'][$id]);
					}
				}
				break;
			case 'empty':
				unset($_SESSION['cart']);
				break;
		}



		
		if (isset($_SESSION['cart'])) {	
		
			$total = 0;
			
			// Retrieve product details from the database for each item in the cart
			foreach ($_SESSION['cart'] as $id) {
				$query = "SELECT * FROM food WHERE ID = '$id'";
				$result = mysqli_query($conn, $query);
		
				if ($result && mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
		
					$name = substr($row['Name'], 0, 40);
					$price = $row['Price'];
					$image = $row['Image'];
					//$product_size = $row['product_size'];
					

		
					$line_cost = $price * $qty;
					$total += $line_cost;

					
		
					// Output the product information in a table row
					echo "<tr>";
					echo "<td><img height='100px' width='100px' src='Photos/".$image."'></td>";
					echo "<td><input type='hidden' required value='".$id."' name='id[]'>".$name."</td>";
					//echo "<td>".$product_size."</td>";
					//echo "<td><input type='hidden' required value='".$qty."' name='qty[]'>".$qty."</td>";
					echo "<td>".$price."</td>";
					echo "<td><a href='cart.php?id=".$id."&action=add_'><i class='icon-plus-sign'> + </i></a></td>";
					echo "<td><a href='cart.php?id=".$id."&action=remove'><i class='icon-minus-sign'> - </i></a></td>";
					echo "<td><strong>P ".$line_cost."</strong></td>";
					echo "</tr>";
					}
				}
			
				// Output the total and empty cart button
				echo "<tr>";
				echo "<td colspan='4'></td>";
				echo "<td><strong>TOTAL:</strong></td>";
				echo "<td>><input type='hidden' required value='".$total."' name='total'><strong>P ".$total."</strong></td>";
				echo "<td></td>";
				echo "<td><a class='btn btn-danger btn-sm pull-right' href='cart.php?id=".$id."&action=empty'><i class='fa fa-trash-o'></i> Empty cart</a></td>";		
				echo "</tr>";
			
		} else {
			// Output a message if the cart is empty
			echo "<tr>";
			echo "<td colspan='8' style='text-align:center'>Cart is empty</td>";
			echo "</tr>";
		}
		
		?>
		</table>


				
		<!-- <div class='pull-right'>
		<a href='home.php' class='btn btn-inverse btn-lg'>Continue Shopping</a>
		<button name="place_order" type="submit" class="btn btn-inverse btn-lg" onclick="alert('Thank you for your purchase, You will be contacted when your order is approved!')">Purchase</button>
		
		<?php //echo '<button name="total" type="submit" class="btn btn-inverse btn-lg" >Purchase</button>';

		?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchase">Purchase mode</button>

		</form>
	



	</div>

	<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Select Payment Method</h3>
  </div>
  <div class="modal-body">
    <form method="post" action="function/place_order.php">
      <center>
        <label for="mpesa-reference">M-Pesa Transaction Reference:</label>
        <input type="text" id="mpesa-reference" name="mpesa_reference" placeholder="Enter M-Pesa transaction reference">
        <br>
        <br>
		
        <button name="place_order" type="button" class="btn btn-lg btn-primary" onclick="submitMpesa()">M-Pesa</button>
        <button name="place_order" type="button" class="btn btn-lg btn-success" onclick="submitCash()">Cash</button>
      </center>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<script>
  function submitMpesa() {
    var reference = document.getElementById("mpesa-reference").value;
    if (reference) {
		// Check if payment method is M-Pesa
		if (isset($_POST['mpesa']) && $_POST['mpesa'] == "true") {
					// Get the reference number
					$reference = $_POST['reference'];
					// Insert the transaction with the reference number
					$query = mysqli_query($conn, "INSERT INTO `transaction` ( payment) VALUES ('$reference')") or die(mysqli_error($conn));
				} else {
					// Insert the transaction with cash on delivery payment method
					$query = mysqli_query($conn, "INSERT INTO `transaction` (payment) VALUES ('cash on delivery')") or die(mysqli_error($conn));
				}
      alert("Payment received via M-Pesa with reference number " + reference);
    } else {
      alert("Please enter the M-Pesa transaction reference number.");
    }
  }

  function submitCash() {
    alert("Payment will be done after delivery.");
  }
</script>

			
			
		<br />		
		<br />	
</div> -->