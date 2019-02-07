<?php

// Require header
require_once('../partials/header.php');
// Require Nav
require_once('../partials/nav.php');

// Create HTML Table with columns: (Row No, Name, Price, Quantity, Total)
?>
<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
	</thead> 
	<tbody>
		<?php
		
		if (!array_key_exists('cart', $_SESSION) || empty($_SESSION['cart'])) {
			
			$_SESSION['cart'] = [];

			echo "<tr>
			<td colspan='5'> No Item to Show</td>
			</tr>";


			
		}
			// Get Session Cart Items
		$cart = $_SESSION['cart'];

			// Get Product List
		$file_content = file_get_contents('../productlist.json');
		$product_list = json_decode($file_content, true);

			// Set Initial Value of Total Amount to 0
		$total_amount = 0;

			/*
			SESSION_CART
			[
				["item_id" => 1, "quantity" => 3],
				["item_id" => 2, "quantity" => 3]
			]
			*/
			// Inside table body 
			// Loop Through Cart Items to Display details to Each Column
			foreach($cart as $key => $item){
				// Loop through product list to get Details of a product
				foreach($product_list as $product){
					// Once found, Display name, price, quantity, (multiply quantity by price) as total
					if($item['item_id'] == $product['item_id']){
						?>
						<tr>
							<td class="row_no"><?php echo $key + 1; ?></td>
							<td class="name"><?php echo $product['music']; ?></td>
							<td class="price"><?php echo $product['price']; ?></td>

							<td class="quantity">
								<i class="reduce fas fa-minus-square" <?php echo $item['quantity'];?>></i>
								<span> <?php echo $item['quantity'];?> </span>
								<i class="increase fas fa-plus-square"></i>
							</td>

								<td class="total"><?php echo $product['price'] * $item['quantity']; ?></td>
							</tr>
							<?php

						// Add total in total amount
							$total_amount += $product['price'] * $item['quantity'];
						}
					}
				}
				?>

				<tr><td class="text-right" colspan="4"><strong>TOTAL: P</strong></td>
					<td class="text-right" id="totalamount"><strong><?php
					echo $total_amount;
					?>
				</td>
			</td>
		</tbody>
	</table>



	<?php
		// Display Total Amount
	echo $total_amount;
	?>

	<!-- // Display A button for checkout -->
	<button>Checkout</button>

<!-- 
	// Require footer -->
	<?php
	require_once('../partials/footer.php');
	?>
	