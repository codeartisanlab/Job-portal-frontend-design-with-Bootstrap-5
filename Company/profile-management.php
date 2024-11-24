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
					  		<th>Company Logo</th>
					  		<td>
					  			<input type="file"  name="logo" class="form-control">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Company Name</th>
					  		<td>
					  			<input type="text"  name="companyname" class="form-control" placeholder="Company Name">
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
					  		<th>City</th>
					  		<td>
					  			<input type="text"  name="city" class="form-control" placeholder="Ludhiana">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>State</th>
					  		<td>
					  			<input type="text"  name="state" class="form-control" placeholder="Punjab">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Country</th>
					  		<td>
					  			<input type="text"  name="country" class="form-control" placeholder="India">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Address</th>
					  		<td>
					  			<textarea class="form-control"></textarea>
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>About Company</th>
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
    