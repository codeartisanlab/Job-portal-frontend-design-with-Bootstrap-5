<?php include('Includes/header.php'); ?>

<div class="container">
	<div class="row my-3">

		<div class="col-lg-8 ">
			<h3 class="my-3">Job Details</h3>
			<div class="card theme-border-light">
            
            <div class="card-body">
              <h5 class="card-title">Website Developer</h5>
              <a href="#" class="text-decoration-none">ABC PVT. LTD.</a>
              
              <p class="card-text"> <h5>Requirements and skills</h5>

            - Proven working experience in web programming.<br>

            - Top-notch programming skills and in-depth knowledge of modern HTML/CSS.<br>

            - Familiarity with at least one of the following programming languages: PHP, ASP.NET, Javascript, or Ruby on Rails.<br>

            - A solid understanding of how web applications work including security, session management, and best development practices.<br>

            - Adequate knowledge of relational database systems, Object-Oriented Programming, and web application development.<br>

            - Hands-on experience with network diagnostics and network analytics tools.<br>

            - Stay plugged into emerging technologies/industry trends and apply them into operations and activities.<br>

            - Cooperate with web designers to match visual design intent.
            </p>
              <p class="card-text"><i class="fa-solid fa-fill-drip"></i> Bootstrap, PHP, MySQL, JavaScript, jQuery etc.</p>
              <p class="card-text"><i class="fa-solid fa-money-bill"></i> ₹15,000 - ₹20,000 a month</p>
               <p class="card-text"><i class="fa-solid fa-location-dot"></i> Ludhiana, Punjab</p>

              <a href="job-details.php" class="btn theme-button-light text-light"><i class="fa-solid fa-arrow-right-to-bracket"></i> Apply Now</a>

              <a href="#" class="btn theme-button-dark text-light" title="Save-Job"><i class="fa-regular fa-bookmark"></i></a>

              

            </div>
          </div>
		</div>
		<div class="col-lg-4 ">
			<h3 class="my-3">Related jobs</h3>

      <?php
        for ($i=0; $i <3 ; $i++) { 

          ?>
         <div class="card theme-border-light mb-4">
            
        <div class="card-body">
          <h5 class="card-title"><a href="job-details.php" class="text-decoration-none">Website Developer</a></h5>
          <a href="#" class="text-decoration-none">ABC PVT. LTD.</a>
          <p class="card-text"><i class="fa-solid fa-location-dot"></i> Ludhiana, Punjab</p>
          <a href="job-details.php" class="btn theme-button-light text-light"><i class="fa-solid fa-eye"></i> View Details</a>
        </div>
      </div>
      <?php
        }
      ?>  
			

		</div>
	</div>
</div>
<?php include('Includes/footer.php'); ?>