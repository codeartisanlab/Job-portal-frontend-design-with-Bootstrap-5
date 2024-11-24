<?php
	include('Includes/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<?php
			include('Includes/sidebar.php');
		?>

		<div class="col-lg-8">
			<div class="card my-5">
				<div class="card-header text-center bg-secondary text-light">
					<h3>Profile Management</h3>
				</div>
				<div class="card-body">
					<form>
					  <table class="table table-bordered">
					  	<tr>
					  		<th>Full Name</th>
					  		<td>
					  			<input type="text"  name="fullname" class="form-control" placeholder="Full Name">
					  		</td>
					  	</tr>
					  	<tr>
					  		<th>Email</th>
					  		<td>
					  			<input type="email"  name="email" class="form-control" placeholder="Email">
					  		</td>
					  	</tr>
					  	<tr>
					  		<th>Contact No.</th>
					  		<td>
					  			<input type="tel"  name="contact" class="form-control" placeholder="Contact No.">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Upload Resume</th>
					  		<td>
					  			<input type="file"  name="resume" class="form-control">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>About Me</th>
					  		<td>
					  			<textarea class="form-control"></textarea>
					  		</td>
					  	</tr>

					  	<tr>
					  		<th colspan="2"><button type="submit" class="btn btn-secondary form-control">Submit</button></th>
					  	</tr>
					  </table>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>


<?php
	include('Includes/footer.php');
?>
    