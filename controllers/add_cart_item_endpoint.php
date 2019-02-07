<?php
session_start();
// Get Item ID
$item_id = $_POST['item_id'];

// Create session for Cart if cart doesn't exist in session
if(!array_key_exists('cart', $_SESSION)){
	$_SESSION['cart'] = [];
}


// Loop through Cart Items to check if the received Item Id already Exists
foreach($_SESSION['cart'] as $key => $item){ // item variable's sample structure -> ['item_id' => ?, 'quantity' => ?]

	// Check if the current Item ID in the iteration is the same to the received Item ID
	if($item['item_id'] == $item_id){
		// if its the same then add 1 to the quantity of the current iteration
		$_SESSION['cart'][$key]['quantity'] += 1;

		// end endpoint execution
		/*header('location: ../index.php');*/
		echo count($_SESSION['cart']);
		die();

}



}

// when the loop finishes, it denotes that there is no existing Item ID therefore push new item in the cart
array_push($_SESSION['cart'], ['item_id' => $item_id, 'quantity' => 1]);

	/*header('location: ../index.php');*/
echo count($_SESSION['cart']);
?>