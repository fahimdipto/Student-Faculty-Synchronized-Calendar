</<?php 
  include_once 'header.php';
 ?>
<section class="main-container">
	<div class="Main_wrapeer">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
		<input type="text" name="first" placeholder="Firstname">
		<input type="text" name="last"  placeholder="Lastname">
		<input type="text" name="email" placeholder="email">
		<input type="text" name="userid" placeholder="Username">
		<input type="password" name="pwd" placeholder="password">
		<button type="submit" name="submit">Register</button>
		</form>
		
	</div>
</section>
 </<?php 
  include_once 'footer.php';
 ?>
