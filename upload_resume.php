<?php 
include 'check_session.php';
include 'header.php';
$user_name=ucwords($_SESSION['name']);

?>
<body>
<div  class="container">
	<div class="col-lg-12">
		<?php
			if($_SESSION['image']==null)
			{
		?><center><img src="images\34AD2.jpg" alt="Cinque Terre" style="border-radius: 50%; margin-top: 5px;width: 200px;height: 200px;"><br>
				<p class="h5"><?php echo $user_name;?></p>

		</center>

		<?php
			}
			else
			{
			?>
			<center><img src="images\<?php echo $_SESSION['image'];?>" alt="Cinque Terre" style="border-radius: 50%; margin-top: 5px;width: 200px;height: 200px;"><br>
				<p class="h5"><?php echo $user_name;?></p>

			</center>
			<?php	
			}

		?>
	</div>
	
</div>
<center>
	<form method="POST" action="resume_file.php" enctype="multipart/form-data">
<div  class="container">
	<div class="col-lg-8">
		<label for="exampleInputEmail1">Resumer's Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="name">
		<div class="custom-file" style="margin-top: 5px;">
  <input type="file" class="custom-file-input" id="customFile" name="reu_file">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
	</div>
	<div class="col-lg-4">
		<input type="submit" value="Upload" class="btn btn-primary" style=" margin-top: 5px;" name="upload">
	</div>
	
</div>
</form>
</center>
	


</body>
<?php
include 'footer.php';


?>