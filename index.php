<?php include('Includes/header.php'); ?>

    <div class="container">
      
      <div class="row justify-content-center">
          <div class="col-md-8 mt-4">
              <div class="input-group ">
                <input type="text" class="form-control form-control-lg" placeholder="Job Title, Keywords, Company" >
                <input type="text" class="form-control form-control-lg" placeholder="Location" >
                
                <button class="btn theme-button-dark text-light" type="button" >Search</button>
              </div>
          </div>
      </div>

      <div class="row mt-5 gy-4">
        <h3>Recent Jobs</h3>

        <?php
            for ($i=0; $i <6 ; $i++) { 

              ?>
              <div class="col-md-4 col-sm-12">
          <div class="card theme-border-light">
            
            <div class="card-body">
              <h5 class="card-title"><a href="<?php echo $baseurl; ?>job-details.php" class="text-decoration-none">Website Developer</a></h5>
              <a href="<?php echo $baseurl; ?>company-details.php" class="text-decoration-none">ABC PVT. LTD.</a>
              <p class="card-text"><i class="fa-solid fa-location-dot"></i> Ludhiana, Punjab</p>
              <a href="<?php echo $baseurl; ?>job-details.php" class="btn theme-button-light text-light"><i class="fa-solid fa-eye"></i> View Details</a>
            </div>
          </div>
        </div>
        <?php
            }
        ?>
        

      </div>


<!-- Pagination Start Here -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center my-4">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

    </div>

<?php include('Includes/footer.php'); ?>
    