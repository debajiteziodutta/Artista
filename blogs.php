<?php include("db.php"); ?>

<?php
    include_once("header.php")
 ?>


		<!-- Collapsible Navbar -->
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home<span class="sr-only"></span></a></li>
				<li class="active"><a href="blogs.php">Blogs</a></li>
				<li><a href="about.php">About us</a></li>
    		<li><a href="contact.php">Contact us</a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="login.php">Log In</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container" style ="background-color: white;">
  
  <!-- Content here -->
  <?php
          $query = "SELECT * FROM task";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
         

              <div class="card" >
                <div class="card-body">
                  <h5 class="card-title"><b><?php print $row['title']; ?></b></h5>
                   
                  <p class="card-text"><?php print $row['description']; ?></p>
                    
                  <a href="edit.php?id=<?php print $row['id']?>" class="btn btn-secondary">Edit</a>

                  <a href="delete_task.php?id=<?php print $row['id']?>" class="btn btn-danger">Delete</a>

               </div>
               <br>
               <br>
</div>
            
  <?php } ?>
</div>

<?php
    include_once("footer.php")
 ?>