<?php
if(isset($_POST['sign_in']))
{
  include 'db_con.php';
  $user_id=rand(1211,99999);
  $status=true;
  extract($_POST);
  while($status)
  {
    $sel_que="select * from user_sign where user_id='$user_id'";
    $res=mysqli_query($con,$sel_que);
    if(mysqli_num_rows($res)>=1)
    {
      $user_id=rand(1211,99999);
    }
    else
    {
      $status=false;
    }
  }
  $ins_que="insert into user_sign(user_id,name,password,email,dob) values('$user_id','$name','$password','$email','$dob')";
  mysqli_query($con,$ins_que);
  $check_que="select * from user_sign where email='$email'";
  $res=mysqli_query($con,$check_que);
  if(mysqli_num_rows($res)>=1)
  {?>
    <script>
      alert('Successfully registered');
      window.location="frontpage.php";
    </script>
  <?php 
  }
  else
  {
    ?>
  <script>
    alert('Email is already registered');
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