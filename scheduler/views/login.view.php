<?php  
if(!defined("APP")) die(); ?>

<?php require "views/header.view.php"; ?>

	<div class="row justify-content-center">
	
			<div class="col-md-5">

		
				<form action="" method="POST">
				<h1 class="display-4 text-primary text-center mt-5 mb-4">Login</h1>
				<div class="form-group">
					<input type="email" name="email"  required class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<input type="password" name="password" required class="form-control" placeholder="***********">
				</div>
				<div">
					<button type="submit" name="submit" class="btn btn-primary px-4">Login</button>
				</div>
				</form>
			</div>
	</div>

<?php require "views/footer.view.php"; ?>