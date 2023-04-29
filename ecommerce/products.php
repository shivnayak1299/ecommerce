<?php
	require './include/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<!-- link to Bootstrap minified css-->

		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require './include/header.php';
			require './include/check-if-added.php';
		?>

			<div class="container">
				<div class="left-sidebar">
					<div class="category">
						
						<p>Category</p>
						<a href="">Fashion</a>
						<a href="">Electronics</a>
						<a href="">Accessories</a>
						<a href="">Furnitures</a>
						<a href="">Home</a>
						<a href="">Personal Care</a>
						<a href="">Grocery</a>
						<a href="">Appliances</a>
						
						
						
					</div>
				</div>
				<div class="right-sidebar">
					<div id="carouselExampleIndicators" class="carousel slide">
						<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJXGxjkwWY0RIQBx35dSxJzsR1fbUDux21b2tCGgCv-pQkAEcLJIBNwsG1KRrXASk8VRRIdFIXJxQ&usqp=CAU&ec=48600112" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJXGxjkwWY0RIQBx35dSxJzsR1fbUDux21b2tCGgCv-pQkAEcLJIBNwsG1KRrXASk8VRRIdFIXJxQ&usqp=CAU&ec=48600112" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJXGxjkwWY0RIQBx35dSxJzsR1fbUDux21b2tCGgCv-pQkAEcLJIBNwsG1KRrXASk8VRRIdFIXJxQ&usqp=CAU&ec=48600112" class="d-block w-100" alt="...">
						</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>



			<div class="small-container">
				<h2 class="title">Featured Products</h2>
				<div class="row">
					<div class="col-4">
						<img src="images/product-1.jpg" >
						<h6>Red Printed T-Shirt</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-2.jpg" >
						<h6>Black Sport Shoes</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-3.jpg" >
						<h6>Trouser Black</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-1.jpg" >
						<h6>Red Printed T-Shirt</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-2.jpg" >
						<h6>Black Sport Shoes</h6>
					
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
				</div>
			</div>


			<div class="small-container">
				<h2 class="title">Recently Viewed Products</h2>
				<div class="row">
					<div class="col-4">
						<img src="images/product-1.jpg" >
						<h6>Red Printed T-Shirt</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-2.jpg" >
						<h6>Black Sport Shoes</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-3.jpg" >
						<h6>Trouser Black</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-1.jpg" >
						<h6>Red Printed T-Shirt</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-2.jpg" >
						<h6>Black Sport Shoes</h6>
					
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
				</div>
			</div>


			<div class="small-container">
				<h2 class="title">Suggested for You</h2>
				<div class="row">
					<div class="col-4">
						<img src="images/product-1.jpg" >
						<h6>Red Printed T-Shirt</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-2.jpg" >
						<h6>Black Sport Shoes</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-3.jpg" >
						<h6>Trouser Black</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(13)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=13" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-1.jpg" >
						<h6>Red Printed T-Shirt</h6>
						
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(14)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=14" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
					<div class="col-4">
						<img src="images/product-2.jpg" >
						<h6>Black Sport Shoes</h6>
					
						<p>$50.00</p>
						<!-- <button class="cart-btn"><a href="#">Add to Cart</a></button> -->
						<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="cart-btn">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(15)){ ?>
									<a href="#" class="cart-btn" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=15" name="add" value="add" class="cart-btn">Add to cart</a>
									<?php }
						} ?>
					</div>
				</div>
			</div>



		<!-- <div class="container panel-margin">
			<div class="jumbotron">
				<h1>Welcome to our LifeStyle Store!</h1>
				<p>We have the best cameras, watches and shirts for you. No need to hunt
					around, we have all in one place.</p>
			</div> -->
		<!--<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/2.jpg" alt="camera">
						<div class="caption">
							<h3>Camera 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/3.jpg" alt="camera">
						<div class="caption">
							<h3>Camera 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(2)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img class="shirt" src="images/4.jpg" alt="camera">
						<div class="caption">
							<h3>Camera 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(3)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/5.jpg" alt="camera">
						<div class="caption">
							<h3>Camera 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(4)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/14.jpg" alt="shirt">
						<div class="caption">
							<h3>Shirt 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(5)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/6.jpg" alt="shirt">
						<div class="caption">
							<h3>Shirt 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(6)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/8.jpg" alt="shirt">
						<div class="caption">
							<h3>Shirt 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(7)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/13.jpg" alt="shirt">
						<div class="caption">
							<h3>Shirt 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(8)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/9.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 1</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(9)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/10.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 2</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(10)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="images/11.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 3</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(11)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail" >
						<img src="images/12.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
							<?php if(!isset($_SESSION["email"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(12)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<?php
			require './include/footer.php';
		?>
		
	</body>
</html>
