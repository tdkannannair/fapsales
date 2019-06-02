 
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>signup</title>
	 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validator Signup Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css file -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css file -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->

</head>

<body>
	<!-- title -->
	<h1>
		
		<span>S</span>ignup
		<span>F</span>orm
	</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form validate="true" action="regaction.php" method="post">
			<div class="form-group"><div class="form-group" style="color:#fff;">
				<label for="exampleInputText">     User    </label>
				<input type="radio" name="user" value="shopkeeper"   checked> 
				shopkeeper
  <input type="radio" name="user" value="farmer"> farmer 
			</div>
				<label for="exampleInputText">Name</label>
				<input type="text" class="form-control" name="name" id="exampleInputText" placeholder="Enter Name" required>
			</div>
			<div class="form-group">
				<label for="exampleInputText">address</label>
				<input type="text" class="form-control" name="address" id="exampleInputText" placeholder="Enter Address" required>
			</div>
			<div class="form-group">
				
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			</div>
			<div class="form-group">
				<label for="exampleMobile1">Mobile number</label>
				<input type="mobile" class="form-control" name="phone" id="exampleMobile1" placeholder="Mobile number" required>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Place  </label>
				<input type="text" class="form-control" name="place" id="exampleInputplace" aria-describedby="emailHelp" placeholder="Enter Place" required>
			</div>
			<div class="form-group" style="color:#fff;">
				<label for="exampleInputText">Gender</label>
				<input type="radio" name="gender" value="male"  checked> 
				Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input maxlength="10" minlength="3" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
				    required>
			</div>
			<div class="form-group">
				<label for="exampleConfirmPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="exampleConfirmPassword1" name="cpassword" placeholder="Confirm Password" required data-match="password"
				    data-match-field="#exampleInputPassword1">
			</div>
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" value="true" required>I agree to the terms and conditions
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div> 
	<div class="footer">
		 
	</div>
	 
	<script src="js/jquery-2.2.3.min.js"></script>
	 
	<script src="js/jquery-simple-validator.min.js"></script>
	<div align="center" style="width:100%;height:auto">
<?php
if(isset($_GET['error'])){
 $error=$_GET['error'];
echo  "<font color=red size=5>".$error;
}
?>
</div>
	 

</body>

</html>