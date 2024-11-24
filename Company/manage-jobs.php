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
						      <th scope="col">Posted Date</th>
						      <th scope="col">Status</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Website Developer</td>
						      <td>20-11-2024</td>
						      <td><span class="badge text-bg-warning">Pending</span></td>

						      <td>
						      	<a href="edit.php" class="btn btn-info"><i class="fa-solid fa-wrench"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

						      	<a href="view.php" class="btn btn-secondary"><i class="fa-solid fa-eye"></i></a>
						      </td>
						    </tr>

						    <tr>
						      <th scope="row">1</th>
						      <td>Website Developer</td>
						      <td>20-11-2024</td>
						      <td><span class="badge text-bg-success">Approved</span></td>

						      <td>
						      	<a href="edit.php" class="btn btn-info"><i class="fa-solid fa-wrench"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

						      	<a href="view.php" class="btn btn-secondary"><i class="fa-solid fa-eye"></i></a>
						      </td>
						    </tr>

						    <tr>
						      <th scope="row">1</th>
						      <td>Website Developer</td>
						      <td>20-11-2024</td>
						      <td><span class="badge text-bg-danger">Rejected</span></td>

						      <td>
						      	<a href="edit.php" class="btn btn-info"><i class="fa-solid fa-wrench"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

						      	<a href="view.php" class="btn btn-secondary"><i class="fa-solid fa-eye"></i></a>
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
    