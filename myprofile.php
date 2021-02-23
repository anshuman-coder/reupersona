<?php 
include 'check_session.php';
include 'db_con.php';
include 'header.php';
$user_id=$_SESSION['id'];
$sel_que="select * from user_sign where user_id='$user_id'";
$res=mysqli_query($con,$sel_que);
$row=mysqli_fetch_array($res);

?>
<body>
<form method="POST" action="update_profile.php" enctype="multipart/form-data">
	<input type="hidden" name="old_img" value="<?php echo $row['user_pic']?>">
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php
				if($row['user_pic']==null)
				{?>
					<img src="images\34AD2.jpg" alt="Cinque Terre" style="border-radius: 50%; margin-top: 5px;width: 200px;height: 200px;">
				<?php
				}
				else
				{?>
					<img src="images\<?php echo $row['user_pic'];?>" alt="Cinque Terre" style="border-radius: 50%; margin-top: 5px;width: 200px;height: 200px;">
				<?php
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<div class="custom-file" style="margin-top: 5px;">
  			<input type="file" class="custom-file-input" id="customFile" name="pro_pic">
  			<label class="custom-file-label" for="customFile">Choose file</label>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 10px;">
		<div class="col-sm-8">
			<div class="form-group">
    		<label for="formGroupExampleInput">Name</label>
    		<input type="text" class="form-control" id="formGroupExampleInput"  value="<?php echo $row['name'];?>" name="name">
  			</div>
  			<div class="form-group">
    		<label for="formGroupExampleInput2">Password</label>
    		<input type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['password'];?>" name="password">
  			</div>
  			<div class="form-group">
    		<label for="formGroupExampleInput">email</label>
    		<input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['email'];?>" name="email">
  			</div>
  			<div class="form-group">
    		<label for="formGroupExampleInput2">Date of Birth</label>
    		<input type="date" class="form-control" id="formGroupExampleInput2" value="<?php echo $row['dob'];?>" name="dob">
  			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<a href="home.php"><input type="button" value="cancel" class="btn btn-danger"></a>
			<input type="submit" name="update" value="Update" class="btn btn-primary">
		</div>
	</div>
</div>
</form>
	
</body>
<?php include 'footer.php';
?>