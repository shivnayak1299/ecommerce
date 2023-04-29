<?php
	require "./include/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login to LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require "./include/header.php";
		?>
		 <div class="center">
        <h1>Login</h1>
        <form action="login_submit.php" method="post">
            <div class="txt-field">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>
            <div class="txt-field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup-link">
                Not a member?<a href="signup.php">Signup</a>
            </div>
        </form>
    </div>


		<!-- <div class="container panel-margin col-xs-4 col-xs-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Login to make purchase</h3>
				</div>
				<div class="panel-body">
					<form action="login_submit.php" method="post">
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="panel-footer">
					Don't have an account?Click <a href="signup.php">here</a> to create one.
				</div>
			</div>
		</div> -->
		
	</body>
</html>
