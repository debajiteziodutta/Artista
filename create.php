<?php include('db.php'); ?>

<?php
    include_once("header.php")
 ?>
		
		<!-- Collapsible Navbar -->
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home<span class="sr-only"></span></a></li>
				<li><a href="blogs.php">Blogs</a></li>
				<li class="active"><a href="create.php">Create</a></li>
				<li><a href="about.php">About us</a></li>
    			<li><a href="contact.php">Contact us</a></li>
				<li><a href="contact.php" name ="logout" method = "POST">Log Out</a></li>

        		<!--<li><a href="signup.php">Sign up</a></li>
        		<li><a href="login.php">Log In</a></li>-->
			</ul>
		</div>
	
	</div>
</nav>
<div class="container">
 
 
<h1>Create Post</h1>
<!--<form action="save.php" method="POST">
<div class="form-group">

<textarea class="form-control" placeholder="Add a Title to your blog" name="title" rows="1" cols="6" required></textarea>
<br>
<textarea class="form-control" placeholder="Describe here..." name="description" rows="15" cols="6" required></textarea>
</div>
<div class="form-group">

<button class="btn btn-success sweep-to-bottom" type="reset">Cancel</button>
<button class="btn btn-success sweep-to-bottom" name= "save" type="submit">Create</button>
</div>-->

<div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Add Title here" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="20" class="form-control" placeholder="Add a brief Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Create">
        </form>
      </div>

</div>

<?php
    include_once("footer.php")
 ?>
