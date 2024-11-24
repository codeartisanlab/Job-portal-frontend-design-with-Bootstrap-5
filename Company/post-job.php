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
					<h3>Post a Job</h3>
				</div>
				<div class="card-body">
					<form>
					  <table class="table table-bordered">
					  	<tr>
					  		<th>Job Title</th>
					  		<td>
					  			<input type="text"  name="title" class="form-control" placeholder="Job Title">
					  		</td>
					  	</tr>
					  	<tr>
					  		<th>Job Description</th>
					  		<td>
					  		<textarea class="form-control"></textarea>
					  	</td>
					  	</tr>
					  	<tr>
					  		<th>Job Type</th>
					  		<td>
					  			<select class="form-select" >
								  <option selected>Open this select menu</option>
								  <option value="1">Full Time</option>
								  <option value="2">Part Time</option>
								  <option value="3">Internship</option>
								</select>
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Required Skills</th>
					  		<td>
					  			<textarea class="form-control"></textarea>
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Salary Range <small>(Per Month)</small>		</th>
					  		<td>
					  			<input type="text"  name="title" class="form-control" placeholder="Salary Range">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Location</th>
					  		<td>
					  			<input type="text"  name="title" class="form-control" placeholder="Ludhiana, Punjab">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Application Deadline</th>
					  		<td>
					  			<select class="form-select" >
								  <option selected>Open this select menu</option>
								  <option value="1">1 week</option>
								  <option value="2">2 week</option>
								  <option value="3">3 week</option>
								  <option value="3">1 month</option>
								</select>
					  		</td>
					  	</tr>

					  	<tr>
					  		<th colspan="2"><button type="submit" class="btn btn-secondary form-control">Job Post</button></th>
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
    