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
					<h3>Manage Users</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Full Name</th>
						      <th scope="col">Email</th>
						      <th scope="col">Status</th>
						      <th scope="col"> (Approve/Deactivate/Delete)	</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Alen</td>
						      <td>alen@gmail.com</td>
						      <td><span class="badge text-bg-success">Active</span></td>

						      <td>
						      	<a href="#" class="btn btn-success"><i class="fa-solid fa-square-check"></i></a>

						      	<a href="#" class="btn btn-secondary"><i class="fa-solid fa-square-minus"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
						      </td>
						    </tr>

						    <tr>
						      <th scope="row">2</th>
						      <td>Mark</td>
						      <td>mark@gmail.com</td>
						      <td><span class="badge text-bg-danger">Inactive</span></td>

						      <td>
						      	<a href="#" class="btn btn-success"><i class="fa-solid fa-square-check"></i></a>

						      	<a href="#" class="btn btn-secondary"><i class="fa-solid fa-square-minus"></i></a>

						      	<a href="delete.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
						      </td>
						    </tr>

						    <tr>
						      <th scope="row">3</th>
						      <td>John Doe</td>
						      <td>john@gmail.com</td>
						      <td><span class="badge text-bg-danger">Inactive</span></td>

						      <td>
						      	<a href="#" class="btn btn-success"><i class="fa-solid fa-square-check"></i></a>

						      	<a href="#" class="btn btn-secondary"><i class="fa-solid fa-square-minus"></i></a>

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
    