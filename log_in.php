<?php
session_start();
if(isset($_POST['log_in']))
{	include 'db_con.php';
	extract($_POST);
	$sel_que="select * from user_sign where email='$email' and password='$password'";
	$res=mysqli_query($con,$sel_que);
	
	if(mysqli_num_rows($res)>=1)
	{
		$row=mysqli_fetch_array($res);
		$_SESSION['login_status']=true;
		$_SESSION['id']=$row['user_id'];
		$_SESSION['name']=$row['name'];
		$_SESSION['image']=$row['user_pic'];
		header('Location:home.php');
	}
	else
	{ ?>
		<script>
			alert('email or password is incorrect');
			window.location="frontpage.php";
		</script>
	<?php
	}
}
else
{
	header('Location:frontpage.php');
}
?>