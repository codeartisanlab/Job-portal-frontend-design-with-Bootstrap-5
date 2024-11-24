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
					<h3>View a Job</h3>
				</div>
				<div class="card-body">
					<form>
					  <table class="table table-bordered">
					  	<tr>
					  		<th>Job Title</th>
					  		<td>
					  			<input type="text"  name="title" class="form-control" value="Website Developer">
					  		</td>
					  	</tr>
					  	<tr>
					  		<th>Job Description</th>
					  		<td>
					  		<textarea class="form-control">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
					  		Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
					  	</textarea>
					  	</td>
					  	</tr>
					  	<tr>
					  		<th>Job Type</th>
					  		<td>
					  			<input type="text" name="jobtype" value="Part Time" class="form-control">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Required Skills</th>
					  		<td>
					  			<textarea class="form-control">Bootstrap5, PHP, MySQL</textarea>
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Salary Range <small>(Per Month)</small>		</th>
					  		<td>
					  			<input type="text"  name="title" class="form-control" value="15000-20000">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Location</th>
					  		<td>
					  			<input type="text"  name="title" class="form-control" value="Ludhiana, Punjab">
					  		</td>
					  	</tr>

					  	<tr>
					  		<th>Application Deadline</th>
					  		<td>
					  			<input type="text" name="deadline" value="1 month" class="form-control">
					  		</td>
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
    