<?php include('db2.php'); ?>

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
        <li class="active"><a href="signup.php">Sign up</a></li>
        <li><a href="login.php">Log In</a></li>
			</ul>
		</div>
	
	</div>
</nav>

  <div class="container">
  <form action="sign_save.php" method="POST">
    <div class="col-md-12">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-12">
    <label  class="col-md-4" for="email" style="margin-top:20px;padding-left:100px;"><b>Email</b></label>
    <div class="col-md-8">
    <input type="text" placeholder="Enter Email" name="email" required>
</div>
</div>
<div class="col-md-12">
    <label  class="col-md-4" for="psw" style="margin-top:20px;padding-left:100px; "><b>Password</b></label>
    <div class="col-md-8">
    <input type="password" placeholder="Enter Password" name="psw" required>
</div>
</div>
<div class="col-md-12">
    <label class="col-md-4" for="psw-repeat" style="margin-top:20px;padding-left:100px;"><b>Repeat Password</b></label>
    <div class="col-md-8">
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
</div>
</div>
     
    <label style="color:black">
    <br>
      <br>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p style="color:black">By creating an account you agree to our <a href="#" style="color:teal">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" name="sign_save" class="btn btn-success sweep-to-bottom">Sign Up</button>
      
      <button type="reset" class="btn btn-default">Cancel</button>
      <br>
		  <br>
      <br>

		<p style="color:black">Alredy have an account? <a href="login.php" style="color:teal">Iog In </a> here</p>
    </div>
  </div>
</form>
<?php
  if(isset($_POST['psw'])&&isset($_POST['psw-repeat']))
  {
    header('location:sign_save.php');
  }
  else
  {
    print"<div class='container'>";
      print"Password miss-matched";
    
    print"</div>";
    
  }
?>
<?php
    include_once("footer.php")
 ?>