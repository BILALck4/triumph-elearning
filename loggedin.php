<?php
  require "header.php" ;
?>

<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item active" aria-current="page"
    style="color:white;">Home</li>
		<li  class="breadcrumb-item active" aria-current="page"
    style="color:white;" href="quizzes.php">Quizzes</li>
  </ol>
</nav>

	<div class="card-container">
		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">cours1</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
					<li><a class="card-text" href="loggedin/engineering_software.php">Pre-production</a><br></li>
			    	<li><a class="card-text" href="loggedin/computer_science_python.php">Production</a></li>
	    		</ul>
	  		</div>
		</div>


		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">cours2</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
					<li><a class="card-text" href="loggedin/computer_science_java.php">Maintenace</a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering_aerospace.php">Qualite </a><br></li>
	    		</ul>
	  		</div>
		</div>

	</div>
	<center>
		<a href="loggedin/all_courses.php" class="mybtn2">Browse All Online Courses</a>
	</center>



  <?php
  require "footer.php";
   ?>
