<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Login</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	   <div class="card-authentication2 mx-auto my-5">
	    <div class="card-group">
	    	<div class="card mb-0">
	    	   <div class="bg-reset-password2"></div>
	    		<div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">Lorem</h2>
                 <h1 class="text-white">Ipsum Dolor</h1>
                 <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
             </div>
	    	</div>

	      <div class="card mb-0">
	    	<div class="card-body">
	         <div class="card-content p-3">
			 <div class="card-title text-uppercase text-center pb-3">Reset Password</div>
			  <p class="text-center pb-2">Please enter your email address. You will receive a link to create a new password via email.</p>
			    <form>
				  <div class="form-group">
				   <div class="position-relative has-icon-left">
					  <label for="exampleInputEmailAddress" class="sr-only">Email Address</label>
						<input type="text" id="exampleInputEmailAddress" class="form-control" placeholder="Email Address">
						<div class="form-control-position">
						 <i class="icon-envelope-open"></i>
					 </div>
				   </div>
				  </div>
				 <button type="button" class="btn btn-outline-primary btn-block waves-effect waves-light mt-3">Reset Password</button>
				 <div class="clearfix"></div>
				  <div class="text-center pt-3">
					<hr>
					<p class="text-muted">Return to the <a href="authentication-signin2.html"> Sign In</a></p>
				  </div>
				 </form>
			   </div>
			  </div>
	    	</div>
	     </div>
	    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	</div>
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
 
</body>
</html>
