<?php
	include('Includes/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<?php
			include('Includes/sidebar.php');
		?>

		<div class="col-lg-8">
			<div class="row">
				<div class="col-lg-6">

					<a href="<?php echo $baseurl; ?>manage-jobs.php" class="text-decoration-none">
					<div class="card my-4 bg-primary-subtle">
						<div class="card-body">

							<div class="d-flex">
								<h1 class="w-100 display-4 fw-semibold">7</h1>
								<h1 class="mt-2"><i class="fa-solid fa-paper-plane"></i></h1>
							</div>
							<h6 class="text-center">No. of Job Posted</h6>
							

						</div>
					</div>
					</a>
				</div>

				<div class="col-lg-6">
					<a href="<?php echo $baseurl; ?>view-applications.php" class="text-decoration-none">
					<div class="card my-4 bg-success-subtle">
						<div class="card-body">

							<div class="d-flex">
								<h1 class="w-100 display-4 fw-semibold">12</h1>
								<h1 class="mt-2"><i class="fa-solid fa-note-sticky"></i></h1>
							</div>
							<h6 class="text-center">No. of Application Recieved</h6>
							

						</div>
					</div>
					</a>
				</div>

				

				<div class="col-lg-12 my-4">
					<div>
					  <canvas id="myChart"></canvas>
					</div>

					<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

					<script>
					  const ctx = document.getElementById('myChart');

					  new Chart(ctx, {
					    type: 'bar',
					    data: {
					      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
					      datasets: [{
					        label: '# of Votes',
					        data: [12, 19, 3, 5, 2, 3],
					        borderWidth: 1
					      }]
					    },
					    options: {
					      scales: {
					        y: {
					          beginAtZero: true
					        }
					      }
					    }
					  });
					</script>

				</div>
			</div>
		</div>
	</div>

</div>


<?php
	include('Includes/footer.php');
?>
