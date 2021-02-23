<?php
if (isset($_POST['update'])) 
{
	include 'db_con.php';
	include 'check_session.php';
	extract($_POST);
	$user_id=$_SESSION['id'];
	$up_que="update user_sign set name='$name',password='$password',email='$email',dob='$dob' where user_id='$user_id'";
	mysqli_query($con,$up_que);
	$img=$_FILES['pro_pic']['name'];
	if($img!=null && $img!="")
	{
		if($old_img!=null && $old_img!="")
		{
			$str=$user_id.$img;
			$tmp_name=$_FILES['pro_pic']['tmp_name'];
			$path="images/".$str;
			//uploading
			move_uploaded_file($tmp_name, $path);
			$up_que="update user_sign set user_pic='$str' where user_id='$user_id'";
			mysqli_query($con,$up_que);

			//deleting
			unlink("images/".$old_img);
		}
		else
		{
			$str=$user_id.$img;
			$tmp_name=$_FILES['pro_pic']['tmp_name'];
			$path="images/".$str;
			//uploading
			move_uploaded_file($tmp_name, $path);
			$up_que="update user_sign set user_pic='$str' where user_id='$user_id'";
			mysqli_query($con,$up_que);
		}
	}?>
	<script>
		alert('data successfully updated');
			window.location="home.php";
	</script>

<?php
}
else
{
	header('Location:myprofile.php');
}





?>