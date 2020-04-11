<?php
    include_once("header.php")
 ?>
		
		<!-- Collapsible Navbar -->
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home<span class="sr-only"></span></a></li>
				<li><a href="blogs.php">Blogs</a></li>
				<li><a href="about.php">About us</a></li>
    			<li><a href="contact.php">Contact us</a></li>
        		<li><a href="signup.php">Sign up</a></li>
        		<li class="active"><a href="login.php">Log In</a></li>
			</ul>
		</div>
	
	</div>
</nav>

  <div class="container">
  <form action="" method="POST">
    <div class="col-md-12">
	<h1>Log In</h1>
	<p>Please login to continue</p>

	<br>
	<br>

	<div class="col-md-12">
    <label  class="col-md-4" for="uname" style="margin-top:20px;padding-left:100px;"><b>Email</b></label>
	<div class="col-md-8">
    <input type="text" placeholder="Enter Email" name="email" required>
	</div>
</div>
<div class="col-md-12">
    <label class="col-md-4" for="psw" style="margin-top:20px;padding-left:100px;"><b>Password</b></label>
	
	<div class="col-md-8">
    <input type="password" placeholder="Enter Password" name="psw" required>
	</div>
</div>

<label style="color:black">
<br>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p style="color:white"><a href="#" style="color:teal">Forgot Password?</a></p>

    <div class="clearfix">
	<br>
	<br>
      <button type="submit" class="btn btn-success sweep-to-bottom"><a href="create.php" style="color:white">Log In</a></button>
	  <!--<button type="submit" class="btn btn-success sweep-to-bottom">Log Out</button>-->
      <button type="reset" class="btn btn-default"><a href="index.php">Cancel</a></button>
		<br>
		<br>

		<p style="color:black">Not having an account? <a href="signup.php" style="color:teal">Create One</a></p>
    </div>
  </div>
</form>


<?php
    include_once("footer.php")
 ?>

