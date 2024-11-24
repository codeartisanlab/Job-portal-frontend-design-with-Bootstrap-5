<?php include('Includes/header.php'); ?>

<?php include 'Company/functions.php'; ?>


<?php

	$addRes='';
	$imgRes='';
	if (isset($_POST['Submit'])) {
		$image=time().'_'.$_FILES['company_logo']['name'];
		$tmp_name=$_FILES['company_logo']['tmp_name'];

		if (move_uploaded_file($tmp_name, 'Company/Assets/imgs/'.$image)) {
			$imgRes='Image uploaded!';
		}else{
			$imgRes='Image not uploaded!';
		}

		$addRes=company_register($conn,$_POST,$image);

	
	}

?>


	<div class="container">
		<div class="row justify-content-center my-5">
			<div class="col-lg-5">
				
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">Company Register</h3>
					</div>
					<?php
						echo $addRes.'</br>';
						echo $imgRes;

					?>
					
					<div class="card-body">
 
						<form method="post" action="" enctype="multipart/form-data">
						Company logo
						<input type="file" class="form-control form-control-md mb-3" name="company_logo">

						<input type="text" class="form-control form-control-md mb-3" placeholder="Company Name" name="company_name">

						<input type="email" class="form-control form-control-md mb-3" placeholder="Email" name="email">

						<input type="tel" class="form-control form-control-md mb-3" placeholder="Contact No." name="contact">

						<input type="password" class="form-control form-control-md mb-3" placeholder="Password" name="password">
						
						

						  <button type="submit" name="submit" class="btn theme-button-light text-light form-control">Signup</button>

						  <p class="text-center mt-3">Already have an account? <a href="company-login.php">Login</a></p>

						</form>


					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('Includes/footer.php'); ?>