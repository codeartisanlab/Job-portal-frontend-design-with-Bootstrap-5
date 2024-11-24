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
					<h3>View Applications</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-hover">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">User Name</th>
						      <th scope="col">Email</th>
						      <th scope="col">Resume Link</th>
						      <th scope="col">Status</th>
						      
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Lorem Ipsum</td>
						      <td>lorem@gmail.com</td>
						      <td>https://www.dummylink.com</td>
						      <td><span class="badge text-bg-success">Active</span></td>
						    </tr>

						    <tr>
						      <th scope="row">1</th>
						      <td>Lorem Ipsum</td>
						      <td>lorem@gmail.com</td>
						      <td>https://www.dummylink.com</td>
						      <td><span class="badge text-bg-success">Active</span></td>
						    </tr>

						    <tr>
						      <th scope="row">1</th>
						      <td>Lorem Ipsum</td>
						      <td>lorem@gmail.com</td>
						      <td>https://www.dummylink.com</td>
						      <td><span class="badge text-bg-danger">Inactive</span></td>
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
    