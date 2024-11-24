<?php include('Includes/header.php'); ?>
	<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-lg-5">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">User Register</h3>
					</div>
					<div class="card-body">
						<input type="text" class="form-control form-control-md mb-3" placeholder="Full Name" >
						<input type="email" class="form-control form-control-md mb-3" placeholder="Email" >

						<input type="tel" class="form-control form-control-md mb-3" placeholder="Contact No." >

						<input type="password" class="form-control form-control-md mb-3" placeholder="Password" >
						
						<input type="file" class="form-control form-control-md mb-3" >

						  <button type="submit" class="btn theme-button-light text-light form-control">Signup</button>

						  <p class="text-center mt-3">Already have an account? <a href="user-login.php">Login</a></p>


					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('Includes/footer.php'); ?>