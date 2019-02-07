/*function computeTotalAmount(){
	let totalamount=0;
	$('.total').each(function(){
		totalamount += parseFloat($(this).text());

	});
	return totalamount;
}



$('.increase').click(function(){
	let quantity =  parseInt($(this).prev().text()) + 1;
	let price = parseFloat($(this).parents('tr').find('.price').text());

	$(this).prev().text(quantity);
	
	$(this).parents('tr').find('.total').text(quantity * price);

	$(this).prev().prev().attr('disabled', false);

	let totalamount = computeTotalAmount();
	$('#totalamount').text(totalamount);
})


$('.reduce').click(function(){
	let quantity =  parseInt($(this).next().text()) - 1;
	let price = parseFloat($(this).parents('tr').find('.price').text());

	
	$(this).next().text(quantity);
	$(this).parents('tr').find('.total').text(quantity * price);

	if (quantity == 1) {

		$(this).attr('disabled', true);
	}

	let totalamount = computeTotalAmount();
	$('#totalamount').text(totalamount);

});
*/


$('.addtocart').click(function(){ 
// Get item id
let item_id = $(this).prev().val();


// Request endpoint
$.ajax({
	"url":'controllers/add_cart_item_endpoint.php',
	"type":'POST',
	"data":{
		"item_id": item_id
},
"success": function(item_count){
// Get item count from server 
	$('#item_count').text(item_count);
}

});


// Display item count to the badge		
})