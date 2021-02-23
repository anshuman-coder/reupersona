<?php 
include 'db_con.php';
include 'check_session.php'; 
include 'header.php'; 
$user_id=$_SESSION['id'];
$sel_que="select * from resume_table where user_id='$user_id'";
$res=mysqli_query($con,$sel_que);
$c=1;
?>
<body>
	<center><div class="container-fluid">
		<h1 class="display-4">Build your resume in minutes</h1>
		<h3><small class="text-muted">Start by choosing a template</small></h3>
  </div></center>
  <div class="container">
  	<div class="row">
  		<div class="col-md-12"><center>
  		<a href="resume.php"><img src="images\pantheon_v2.png" style="height: 500px;"></a>
  		</center>
  	</div>
  </div>
  </div>
 <center><div class="container-fluid">
		<h1 class="display-4">Your Resumes</h1>
		<h3><small class="text-muted">recent resumes made</small></h3>
  </div></center>
  <div class="container">
  	<div class="row">
  		<div class="col-sm-3"></div>
  		<div class="col-sm-6">
  			<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Download</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody><?php
  while($row=mysqli_fetch_array($res))
  {
  	$name=ucwords($row['name']);
  ?>
    <tr>
      <th scope="row"><?php echo $c;?></th>
      <td><?php echo $name;?></td>
      <td><a href="file/<?php echo $row['file'];?>" target="_blank"><input type="button" value="Download" class="btn btn-primary"></a></td>
      <td><form method="POST" action="delete.php">
      	<input type="hidden" name="resume_id" value="<?php echo $row['resume_id']?>">
      	<input type="hidden" name="file" value="<?php echo $row['file']?>">
      	<input type="submit" name="delete" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
      </form></td>
    </tr>
    <?php
    $c++;
  }
    ?>
  </tbody>
</table>
  		</div>
  		<div class="col-sm-3"></div>
  	</div>
  </div>
</body>
<?php include 'footer.php' ?>