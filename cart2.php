
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center border rounded bg-light">
				<h1>My Cart</h1>
				<div class="col-lg-9">
					<table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody class="text-center">
  	<?php
  	$total=0;
  	if(isset($_SESSION['cart'])){
  	foreach ($_SESSION['cart'] as $key => $value) {
  		$sr=$key+1;
  		$total=$total+$value['item_price'];
  		echo"
  		<tr>
  		<td>$sr</td>
  		<td>$value[item_name]</td>
  		<td>$value[item_price]</td>
  		<td><input class='text-center' type='number' value='$value[Quantity]' name='quantity' min='1' max='10'></td>
  		<td>
  		<form action='cart.php' method='POST'>
  		<button name='r_item' class='btn-btn-sm btn-outline-danger'>Remove</button>
  		<input type='hidden' name='item_name' value='$value[item_name]'>
        </form>
  		</td>
  		</tr>";

  	}
  }
  	?>
    
    
  </tbody>
</table>
				<br>

			</div>
			<div class="col-lg-3">
				<div class="border bg-lite rounded p-4">
				<h4>Total</h4>
				<h5 class="text-right"><?php echo $total ?></h5><br>
				<form>
					<input  type="radio" name="r1">Via UPI<br>
					<input  type="radio" name="r1">Via Offline Mode<br>
					<button class="btn btn-primary btn-block">Make Purchase</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</body>
</html>