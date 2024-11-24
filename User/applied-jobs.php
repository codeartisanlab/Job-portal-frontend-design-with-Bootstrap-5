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
					<h3>Application History / Applied Jobs</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Job Title</th>
						      <th scope="col">Company Name</th>
						      <th scope="col">Status</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Website Developer</td>
						      <td>ABC PVT. LTD.</td>
						      <td><span class="badge text-bg-warning">Pending</span></td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Website Developer</td>
						      <td>ABC PVT. LTD.</td>
						      <td><span class="badge text-bg-success">Accepted</span></td>
						    </tr>
						    

						    <tr>
						      <th scope="row">3</th>
						      <td>Website Developer</td>
						      <td>ABC PVT. LTD.</td>
						      <td><span class="badge text-bg-danger">Rejected</span></td>
						    </tr>

						    <tr>
						      <th scope="row">4</th>
						      <td>Website Developer</td>
						      <td>ABC PVT. LTD.</td>
						      <td><span class="badge text-bg-success">Accepted</span></td>
						    </tr>
						    
						  </tbody>
						</table>
				</div>
			</div>
		</div>
	</div>

</div>


<?php
	include('Includes/footer.php');
?>
    