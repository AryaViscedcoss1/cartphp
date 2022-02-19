<?php include 'config.php'?>
<?php include 'function.php'?>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <?php include('header.php');?>
	<div id="main">
	
		<div id="products">
		<?php //product listing 
		productlisting($products);
		?>
		</div>
		<div id="cart">
			
		<form action="cart.php" method="post">
		<input type="submit" name="name" style="font-size:24px" value="viewcart"><i class="fa fa-shopping-cart" style="font-size:48px"></i></input>
	   </form>
       </div>


		</div>
	</div>
	<?php include('footer.php');?>
</body>
</html>