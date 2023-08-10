<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Career</title>
    <style>
        .navbar{
	overflow: hidden;
	background-color:#333;
	position: fixed;
	top: 0; 
	width: 100%;
  }
  h1,
  p {
    color: #fff;
  }
  .jobs{
    border: 1px solid black;
    box-shadow: 5px 5px 4px 5px grey;
    margin: 10px;
    padding: 10px;
  }
        </style>
</head>
<body>
   
<div class="row">
  <div class="col-12">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('banner-1.jpg'); background-size:cover;">
    <div class="container">
      <h1 class="display-4">Job Portal</h1>
<p class="lead">Best Jobs available matching your skills</p>
</div>
</div>
</div>
</div>
<div class="row">
  <?php
   $sql = "SELECT cname,position,Jdesc,skills,CTC FROM jobs";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo'
      <div class="col-md-4">
      <div class="jobs">
      <h3 style="text-align: center;">'.$rows['position'].'</h3>
      <h4 style="text-align: center;">'.$rows['cname'].'</h4>
      <p style="color: black; text-align:justify;">'.$rows['Jdesc'].'</p>
      <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
      <p style="color: black;"><br>CTC:</b>'.$rows['CTC'].'</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
      Aplly now
     </button>
    </div>
  </div>';
}
  }
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Apply for Jobs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="qual">
          </div> <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout:</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="Position" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="Job Description" class="form-label">Job Description</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control" name="Jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>


