<?php
include 'check_session.php';
include 'db_con.php';
if(isset($_POST['upload']))
	{
		$resume_id=rand(1211,99999);
		$name=$_POST['name'];
		$status=true;
		while($status)
		{
			$sel_que="select *from resume_table where resume_id='$resume_id'";
			$res=mysqli_query($con,$sel_que);
			if(mysqli_num_rows($res)>=1)
			{
				$resume_id=rand(1211,99999);
			}
			else
			{
				$status=false;
			}

		$user_id=$_SESSION['id'];
		$reu=$resume_id.$_FILES['reu_file']['name'];
		$tmp_name=$_FILES['reu_file']['tmp_name'];
		$path="file/".$reu;
		move_uploaded_file($tmp_name, $path);

		$sel_que="insert into resume_table(user_id,name,resume_id,file) values('$user_id','$name','$resume_id','$reu')";
		mysqli_query($con,$sel_que);
		?>
			<script>
			alert('resume successfully uploaded');
			window.location="home.php";
		</script>

		<?php
	}
}
else
{
	header('Location:upload_resume.php');
}



?>