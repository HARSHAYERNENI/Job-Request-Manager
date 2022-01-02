<?php include 'config.php'; ?>
<?php include 'header.php'?>
<!-- Page content -->
<div class="content">
  <p>
  <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Jobs
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form method="post">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea cols="30" rows="10" class="form-control" id="JobDesc" name="jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="jobs">Submit</button>
</form>
      </div>
</div>

<table class="table">
<thead>
 <tr>
   <th scope="col">#</th>
   <th scope="col">Company Name</th>
   <th scope="col">Position</th>
   <th scope="col">CTC</th>
 </tr>
</thead>
<?php
  $sql="SELECT  `cname`, `position`, `CTC` FROM `jobs`";
  $result = mysqli_query($conn,$sql);
  $i=0;
  if($result->num_rows > 0){
    while($rows=$result->fetch_assoc()){

      echo"
      <tbody>
        <tr>
             <td>".++$i."</td>
             <td>".$rows['cname']."</td>
             <td>".$rows['position']."</td>
             <td>".$rows['CTC']."</td>
        </tr>
      </tbody>";
    }
  }
  else{
    echo"";
  }
 ?>

</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
      </body>
</html>
