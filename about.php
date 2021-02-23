<?php
include 'check_session.php';
include 'header.php';

?>
<body>
	<div style="width: 100%; height: 100px;margin-bottom: 10px; padding-bottom: 5px;">
<!---sign in modal--->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="sign_in.php">
      <div class="modal-body">
        
        	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>


  	  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>


<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">D.O.B</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputEmail3" name="dob">
    </div>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="sign_in">Sign In</button>
      </div>
     </form>
    </div>
  </div>
</div>
	</div>



	<!----login modal--->
	<div style="width: 100%; height: 100px;margin-bottom: 10px; padding-bottom: 5px;">

		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="log_in.php">
      <div class="modal-body">
        
        	<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="Email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
  <a class="nav-link" href="#">Forgot password?</a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="log_in">Log In</button>
      </div>
     </form>
    </div>
  </div>
</div>
	</div>



<!---slide--->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/download.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\download(1).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images\getty_696806868_358191.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---slide end--->

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Our Board Members</h1>
    <p class="lead">Big Dreams Needs One Small Step.</p>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-lg-4">
      <!---card 1--->
      <div class="card" >
  <img class="card-img-top" src="images\me.jpg" alt="Card image cap" style="border-radius: 50%;height: 250px;">
  <div class="card-body">
    <p class="card-text" style="font-family: arial">CEO</p>
  </div>
</div>
</div>


    <div class="col-lg-4">
      <!---card 2--->
      <div class="card">
  <img class="card-img-top" src="images\cfo2.jpg" alt="Card image cap" style="border-radius: 50%;height: 250px;">
  <div class="card-body">
    <p class="card-text" style="font-family: arial">CFO</p>
  </div>
</div>


    </div>
    <div class="col-lg-4">
      <!---card 3--->
      <div class="card">
  <img class="card-img-top" src="images\cfo1.jpg" alt="Card image cap" style="border-radius: 50%; height: 250px;">
  <div class="card-body">
    <p class="card-text" style="font-family: arial">CFO</p>
  </div>
</div>

    </div>
  </div>
</div>

</div>


	
</body>
<?php
include 'footer.php';

?>