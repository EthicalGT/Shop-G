<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['atoc'])){
		if(isset($_SESSION['cart'])){
			$myitems=array_column($_SESSION['cart'], 'item_name');
			if(in_array($_POST['item_name'], $myitems)){
				echo"<script>alert('item already exist');
                window.location.href='grocery.html';
				</script>";
			}
			else{
			$count=count($_SESSION['cart']);
			
           
           $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'item_price'=>$_POST['price'],'Quantity'=>1);
           echo"<script>alert('item added');
                window.location.href='grocery.html';
				</script>";
		}
	}
		else{
           $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'item_price'=>$_POST['price'],'Quantity'=>1);
           echo"<script>alert('item added');
                window.location.href='grocery.html';
				</script>";
		}
	}
	if(isset($_POST['r_item'])){
		foreach ($_SESSION['cart'] as $key=> $value) {
			if($value['item_name']==$_POST['item_name']){


			unset($_SESSION['cart'][$key]);
			$_SESSION['cart']=array_values($_SESSION['cart']);
			echo"<script>
			alert('Item Removed');
			window.location.href='cart2.php';
			</script>";
		}
		}
	}
}
?>