<?php
    include_once("header.php")
 ?>
		
		<!-- Collapsible Navbar -->
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home<span class="sr-only"></span></a></li>
				<li><a href="blogs.php">Blogs</a></li>
				<li><a href="about.php">About us</a></li>
    		<li class="active"><a href="contact.php">Contact us</a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="login.php">Log In</a></li>
			</ul>
		</div>
	
	</div>
</nav>
<div class="container contact">
  <form action="#" method="POST">
    <div class="col-md-12">
    <label class="col-md-4" for="fname">First Name</label>
    <div class="col-md-8">
    <input class="transparent-input" type="text" id="fname" name="firstname" placeholder="Your name.." required />
    </div>
    </div>
    <div class="col-md-12">
    <label class="col-md-4" for="lname">Last Name</label>
    <div class="col-md-8">
    <input class="transparent-input" type="text" id="lname" name="lastname" placeholder="Your last name.." required />
    </div>
</div>
<div class="col-md-12 {margin-top:20px;}">
    <label class="col-md-4" for="subject">Subject</label>
    <div class="col-md-8">
    <textarea id="subject" type="text" class="transparent-input" name="subject" placeholder="Write something.." style="height:200px"  required></textarea>
</div>
</div>
    <button class="btn btn-success sweep-to-bottom" type="submit" >Submit</button>
    <button class="btn btn-default"type="reset">Reset</button>
  </form>
</div>


<?php
    include_once("footer.php")
 ?>