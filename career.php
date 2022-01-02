<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Career</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>
  <body>

    <div class="p-5 mb-4 text-white bg-light rounded-3"  style="background-image: url('banner-1.jpg'); background-size:cover;">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Job Portal</h1>
        <p class="col-md-8 fs-4">Best Jobs available For your skills.</p>

      </div>
    </div>
    <!-- hi -->
    <div class="container">
      <div class="row">
    <?php
      $sql="SELECT `cname`,`position`,`jdesc`,`CTC`,`skills` FROM `jobs`";
      $result=mysqli_query($conn,$sql);
      if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
          echo'
            <div class="col-md-4">
              <div class = "border border-3 rounded border-success">
              <h3 style="text-align: center;">'.$row['position'].'</h3>
              <h4 style="text-align: center;">'.$row['cname'].'</h4>
              <p style="color: black; text-align: justify;">'.$row['jdesc'].'</p>
              <p style="color: black;"><b>Skills Required: </b>'.$row['skills'].'</p>
              <p styles="color: black;"><b>CTC: </b>'.$row['CTC'].'</p>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">Apply Now</button>

              </div>
            </div>';
        }
      }
      else{
         echo'';
      }
     ?>
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for</label>
           <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Year passed out</label>
            <input type="text" class="form-control" name="year">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="applyfor" class="btn btn-primary">Apply</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
  </div>
    </div>

    <!-- hi -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
