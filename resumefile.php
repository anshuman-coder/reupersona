<?php

include 'check_session.php';
	include 'header.php';
  extract($_POST);
   $fname=ucwords($fname);
   $lname=ucwords($lname);
   $father_name=ucwords($father_name);
   $mother_name=ucwords($mother_name);
?>
<body>
  <div id="printarea" class="border">
		  <div class="container">
  <div class="row">
    <div class="col-sm-12">
    	<div style="background-color: black;height: 250px;padding: 40px 20px 40px 20px; margin-bottom: 5px;">


    <h1 class="display-3" style="color: white;"><?php echo $fname;?></h1><br>
    <h1 class="display-3" style="color: white;"><?php echo $lname;?></h1>
  
    		
    	</div>
	</div>
</div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-sm-4">
    	<div style="background-color: #D3D3D3;height: 210px;padding: 10px;text-align: center;margin-bottom: 5px;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3" class="h5" style="font-weight: bold;">Career Objective</label>
			</div>
    		
    	</div>
      
	</div>
  <div class="col-sm-8">
    <div style="background-color:white;padding: 10px;text-align: left;">
      <p style="text-align: left;"><?php echo $car_obj;?></p>
    </div>
  </div>
</div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-sm-4">
    	<div style="background-color: #D3D3D3;height: 210px;padding: 10px;text-align: center;margin-bottom: 5px;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3" class="h5" style="font-weight: bold;">Academic Qualifications</label>
			</div>
    	</div>
      
	</div>
  <div class="col-sm-8">
    <div style="background-color: white;padding: 10px;text-align: center;">
    <ul style="text-align: left;" class="card-text">
              <li style="margin-bottom: 5px;">I have completed my High School from <mark><?php echo $hs;?></mark> in <mark><?php echo $pass_hs;?></mark> with <mark><?php echo $g_hs;?> grade.</mark></li>
              <li>I have completed my graduation from <mark><?php echo $gra;?></mark> in <mark><?php echo $pass_gra;?></mark> with <mark><?php echo $g_gra;?> grade.</mark></li>
            </ul>
    </div>

  </div>
</div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-sm-4">
    	<div style="background-color: #D3D3D3;height: 250px;padding: 10px;text-align: center;margin-bottom: 5px;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3" class="h5" style="font-weight: bold;">Recent Projects</label>
  				
			</div>
    	</div>
      
	</div>
  <div class="col-sm-8">
    <div style="background-color: white;padding: 10px;text-align: left;">
    <ul style="text-align: left;">
            <li><?php echo $p1;?></li> 
            <li><?php echo $p2;?></li>   
          </ul>
  </div>
</div>
</div>
</div>

<div class="container" >
  <div class="row">
    <div class="col-sm-4">
    	<div style="background-color: #D3D3D3;height: 450px;padding: 10px;text-align: center;margin-bottom: 5px;">
    		<div class="form-group">
  				<label for="exampleFormControlTextarea3" class="h5" style="font-weight: bold;">Personal Info</label>
			</div>
    	</div>
      
	</div>
  <div class="col-sm-8">
    <div style="background-color: white;padding: 10px;text-align: left;">
                <div class="row">
            <div class="col">
              <h5>
                <small class="text-muted">Father's name:</small>Mr. <?php echo $father_name;?>
              </h5>
            </div>
            <div class="col">
              <h5>
                <small class="text-muted">Mother's name:</small>Mrs. <?php echo $mother_name;?>
              </h5>
            </div>
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col">
              <h5>
                <small class="text-muted">Email:</small><?php echo $email;?>
              </h5>
            </div>
            <div class="col">
              <h5>
                <small class="text-muted">Phone:</small><?php echo $phone;?>
              </h5>
            </div>
          </div>
          <div class="row" style="margin-top: 20px;padding: 40px;">
            <h5>
                <small class="text-muted">DOB:</small><?php echo $date;?>/<?php echo $month;?>/<?php echo $year;?>
              </h5>
          </div>
          <div class="row" style="margin-top: 10px;">
            <div class="col">
              <h5> <small class="text-muted">Address</small></h5>
              <p><?php echo $address;?></p>
            </div>
          </div>
    </div>
  </div>
</div>
</div>
</div>
<center><a href="resume.php?"><button type="button" class="btn btn-primary" style="margin: 10px;">Back</button></a>
  <a href="home.php?"><button type="button" class="btn btn-danger" style="margin-right: 10px;">cancel</button></a>
  <button type="button" class="btn btn-secondary" onclick="print_resume('printarea')">Print</button>

</center>
	
</body>
<script>
  function print_resume(divName)
      {
        var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;

          document.body.innerHTML = printContents;

          window.print();

          document.body.innerHTML = originalContents;

          var check=confirm('Want to Upload the resume for future use?');
          if(check==true)
          {
            window.location="upload_resume.php";
           
          }
          else
          {
            window.location="home.php";
           
          }
      }
    </script>
<?php 
include 'footer.php';
?>