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
					<h3>Manage Jobs</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Job Title</th>
						      <th scope="col">Company Name</th>
						      <th scope="col">Posted date</th>
						      <th scope="col">Status</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Website Developer</td>
						      <td>XYZ PVT. LTD.</td>
						      <td>21-11-2024</td>
						      <td><span class="badge text-bg-success">Approved</span></td>

						      <td>
						      	<a href="#" class="btn btn-success"><i class="fa-solid fa-square-check"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
						      </td>
						    </tr>

						    <tr>
						      <th scope="row">1</th>
						      <td>Website Designer</td>
						      <td>ABC PVT. LTD.</td>
						      <td>21-11-2024</td>
						      <td><span class="badge text-bg-warning">Pending</span></td>

						      <td>
						      	<a href="#" class="btn btn-success"><i class="fa-solid fa-square-check"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
						      </td>
						    </tr>

						    <tr>
						      <th scope="row">1</th>
						      <td>Wordpress Developer</td>
						      <td>XYZ PVT. LTD.</td>
						      <td>21-11-2024</td>
						      <td><span class="badge text-bg-success">Approved</span></td>

						      <td>
						      	<a href="#" class="btn btn-success"><i class="fa-solid fa-square-check"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
						      </td>
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
    