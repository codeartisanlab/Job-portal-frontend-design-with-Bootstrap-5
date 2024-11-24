<?php include('Includes/header.php'); ?>

<div class="container">
	<div class="row my-3">

		<div class="col-lg-8 ">
			<h3 class="my-3">Company Details</h3>
			<div class="card theme-border-light">
            
            <div class="card-body">
              <h5 class="card-title">ABC PVT. LTD.</h5>
              
              
              <p class="card-text"><i class="fa-solid fa-envelope"></i> abc@gmail.com</p>
              <p class="card-text"><i class="fa-solid fa-phone"></i> 1234567890</p>
              
              
               <p class="card-text"><i class="fa-solid fa-location-dot"></i> Akshya Nagar 1st Block 1st Cross, Ludhiana, Punjab, India</p>
               

               <p class="card-text"> ABC PVT. LTD. is a leading Company in Website Design and SEO in Ludhiana from last 5 years. We are ISO Certified and have clients from all over the world. We have recently started US based voice(BPO) Processes.</p>

                <p>Our office is located on Akshya Nagar 1st Block 1st Cross, Ludhiana, Punjab, India
                </p>

              <a href="job-details.php" class="btn theme-button-light text-light"><i class="fa-solid fa-arrow-right-to-bracket"></i> Apply Now</a>

            </div>
          </div>

          <div class="row my-3">
            <h3 class="my-3">ABC PVT. LTD. Jobs</h3>
            <?php
        for ($i=0; $i <3 ; $i++) { 

          ?>
            <div class="col-lg-4 ">
              <div class="card theme-border-light mb-4">
            
              <div class="card-body">
                <h5 class="card-title"><a href="job-details.php" class="text-decoration-none">Website Developer</a></h5>
                <p class="card-text"><i class="fa-solid fa-money-bill"></i> ₹15,000 - ₹20,000 a month</p>
                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Ludhiana, Punjab</p>
                <a href="job-details.php" class="btn theme-button-light text-light"><i class="fa-solid fa-eye"></i> View Details</a>
              </div>
            </div>
            </div>
            <?php
              }

              ?>
          </div>
		</div>
		<div class="col-lg-4 ">
			<h3 class="my-3">Related Companies</h3>

      <?php
      for ($i=0; $i <3 ; $i++) { 

        ?>
        <div class="card theme-border-light mb-4">
          <div class="card-body">
            <h5 class="card-title">ABC PVT. LTD.</h5>
            <p class="card-text"><i class="fa-solid fa-envelope"></i> abc@gmail.com</p>
            <p class="card-text"><i class="fa-solid fa-phone"></i> 1234567890</p>
            
            
             <p class="card-text"><i class="fa-solid fa-location-dot"></i> Akshya Nagar 1st Block 1st Cross, Ludhiana, Punjab, India</p>
            
            <a href="company-details.php" class="btn theme-button-light text-light"><i class="fa-solid fa-eye"></i> View Details</a>
          </div>
        </div>
        <?php
      }

      ?>
			

          

         
		</div>
	</div>
</div>
<?php include('Includes/footer.php'); ?>