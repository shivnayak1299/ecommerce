<!-- <nav class="nav navbar-inverse navbar-fixed-top  navbar-dark bg-dark ">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">LifeStyle Stores</a>
		</div>
		<div class="collapse navbar-collapse" id="mynavBar">
			<?php
				if(isset($_SESSION["email"])){ 
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
					<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			<?php
				}else{
			?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
				</ul>
			 <?php
				}
			?> 
		</div>
	</div>
</nav> -->


<nav class="NavbarItems">
        <h1 class="navbar-logo">e-Shop</h1>
		<?php
				if(isset($_SESSION["email"])){ 
			?>
			<ul class="nav-menu">
            
            <div class="search">
                <form action="#">
                    <input type="text"
                        placeholder=" Search Products"
                        name="search">
                    <button>
                        <i class="fa fa-search"
                            style="font-size: 25px; ">
                        </i>
                    </button>
                </form>
            </div>
            <li><a href="products.php">Home</a></li>
            
            <li><a href="cart.php">Cart</a></li>
            <li><a href="settings.php">Setting</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        
				
		<?php
				}else{
			?>
			<ul class="nav-menu">
            
            <div class="search">
                <form action="#">
                    <input type="text"
                        placeholder=" Search Products"
                        name="search">
                    <button>
                        <i class="fa fa-search"
                            style="font-size: 25px; ">
                        </i>
                    </button>
                </form>
            </div>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">LogIn</a></li>
            <li><a href="signup.php">SignUp</a></li>
        </ul>

			
		<?php
				}
			?>
    </nav>
    


<!-- <nav class="NavbarItems">
        <h1 class="navbar-logo">e-Shop</h1>
        <ul class="nav-menu">
            
            <div class="search">
                <form action="#">
                    <input type="text"
                        placeholder=" Search Products"
                        name="search">
                    <button>
                        <i class="fa fa-search"
                            style="font-size: 25px; ">
                        </i>
                    </button>
                </form>
            </div>
            <li><a href="#">Home</a></li>
            
            <li><a href="signup.php">Cart</a></li>
            <li><a href="signup.php">Setting</a></li>
            <li><a href="signup.php">Logout</a></li>
        </ul>
		
    </nav> -->