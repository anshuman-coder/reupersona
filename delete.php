<?php
	if (isset($_POST['delete'])) 
	{
		include 'db_con.php';
		include 'check_session.php';
		extract($_POST);
		unlink("file/".$file);
		$del_que="delete from resume_table where resume_id='$resume_id'";
		mysqli_query($con,$del_que);

	?>
		<script>
			alert('Resume deleted successfully');
			window.location="home.php";
		</script>



	<?php
}
	else
	{
		header('Location:home.php');
	}



?>