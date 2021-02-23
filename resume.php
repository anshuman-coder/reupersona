<?php
include 'check_session.php';
	include 'header.php';
?>
<body>
	<form method="POST" action="resumefile.php">
		  <div class="container" >
  <div class="row">
    <div class="col-lg-12">
    	<div style="background-color: black;height: 250px;padding: 40px 20px 30px 20px;">
    		<div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">first name</span>
  </div>
  <input type="text" name="fname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
    		<div class="input-group input-group-lg" style="margin-top: 30px;">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">last name</span>
  </div>
  <input type="text" name="lname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
    	</div>


</div>
</div>
</div>
<div class="container" >
  <div class="row">
    <div class="col-lg-12">
    	<div style="background-color: #D3D3D3;height: 250px;padding: 10px;text-align: center;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3">Career Objective</label>
  				<textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="car_obj"></textarea>
			</div>
    		
    	</div>
      
	</div>
</div>
</div>
<div class="container" >
  <div class="row">
    <div class="col-lg-12">
    	<div style="background-color: #D3D3D3;height: 250px;padding: 10px;text-align: center;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3">Academic Qualifications</label>
  				 <div class="row">
    <div class="col">
      <input name="hs" type="text" class="form-control" placeholder="High School">
    </div>
    <div class="col">
      <input name="pass_hs" type="text" class="form-control" placeholder="Passing year">
    </div>
    <div class="col">
      <input name="g_hs" type="text" class="form-control" placeholder="Grades">
    </div>
  </div>

  <div class="row" style="margin-top: 20px;">
    <div class="col">
      <input name="gra" type="text" class="form-control" placeholder="Graduation">
    </div>
    <div class="col">
      <input name="pass_gra" type="text" class="form-control" placeholder="Passing year">
    </div>
    <div class="col">
      <input name="g_gra" type="text" class="form-control" placeholder="Grades">
    </div>
  </div>
			</div>
    	</div>
      
	</div>
</div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-lg-12">
    	<div style="background-color: #D3D3D3;height: 250px;padding: 10px;text-align: center;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3">Recent Projects</label>
  				<div class="row">
  					<div class="col">
  						<input  type="text" name="p1" class="form-control" placeholder="project">
  					</div>
  					<div class="col">
  						<input  type="text" name="p2" class="form-control" placeholder="project">
  					</div>
  				</div>
			</div>
    	</div>
      
	</div>
</div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-lg-12">
    	<div style="background-color: #D3D3D3;height: 350px;padding: 10px;text-align: center;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3">Personal Info</label>
  				<div class="row">
  					<div class="col">
  						<input name="father_name" type="text" class="form-control" placeholder="Father's name">
  					</div>
  					<div class="col">
  						<input name="mother_name" type="text" class="form-control" placeholder="Mother's name">
  					</div>
  				</div>
  				<div class="row" style="margin-top: 20px;">
  					<div class="col">
  						<input name="email" type="Email" class="form-control" placeholder="Email">
  					</div>
  					<div class="col">
  						<input name="phone" type="text" class="form-control" placeholder="Phone">
  					</div>
  				</div>
  				<div class="row" style="margin-top: 20px;">
  					<div class="col">
  						<input name="date" type="number" class="form-control" placeholder="Birth date">
  					</div>
  					/
  					<div class="col">
  						<input name="month" type="number" class="form-control" placeholder="Birth month">
  					</div>
  					/
  					<div class="col">
  						<input name="year" type="number" class="form-control" placeholder="Birth year">
  					</div>
  				</div>
  				<div class="row" style="margin-top: 20px;">
  					<div class="col">
  						<textarea class="form-control" id="exampleFormControlTextarea3" rows="3" name="address">Address....</textarea>
  					</div>
  				</div>
			</div>
    	</div>
      
	</div>
</div>
</div>
<center><input type="submit" class="btn btn-primary" name="submit" style="margin: 10px;"></center>
</form>
	
</body>
<?php 
include 'footer.php';


?>